<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Preditct;
use Illuminate\Http\Request;



use Phpml\Classification\DecisionTree;



use Phpml\Dataset\ArrayDataset;


class RemplirController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'prenom' => ['required'],
            'genre' => ['required', 'max:255'],
            'dependence' => ['required'],
            'auto_emploi' => ['required', 'max:255'],
            'marie' => ['required'],
            'education' => ['required', 'max:255'],
            'revenu' => ['required'],
            'credit' => ['required', 'max:255'],
            'displayYears' => ['required'],
            'H_redit' => ['required', 'max:255'],
            'zone' => ['required'],
        ]);

        $so = Client::create([
            'Nom' => $request->name,
            'prenom' => $request->prenom,
            'Gender' => $request->genre,
            'Married' => $request->marie,
            'Dependents' => $request->dependence,
            'Education' => $request->education,
            'Self_Employed' => $request->auto_emploi,
            'ApplicantIncome' => $request->revenu,
            'LoanAmount' => $request->credit,
            'Loan_Amount_Term' => $request->input('displayYears'),
            'Credit_History' => $request->H_redit,
            'Property_Area' => $request->zone,


        ]);


        // Charger le fichier CSV dans un tableau
        $data = array_map('str_getcsv', file('C:\Mlbank.csv'));

        // Supprimer la première ligne (l'en-tête)
        array_shift($data);

        // Séparer les données en attributs et en étiquettes
        $attributes = array_map(function ($row) {
            return array_slice($row, 1, 10);
        }, $data);

        $labels = array_map(function ($row) {
            return $row[11];
        }, $data);

        // Transformer les étiquettes en valeurs numériques
        $labels = array_map(function ($label) {
            return $label == "Y" ? 'Yes' : 'No';
        }, $labels);

        // Créer un ensemble de données étiquetées
        $dataset = new ArrayDataset($attributes, $labels);

        // Créer un classificateur Decision Tree
        $estimator = new DecisionTree();

        // Entraîner le modèle avec les données d'entraînement
        $estimator->train($dataset->getSamples(), $dataset->getTargets());

        // Utiliser le modèle pour prédire la solvabilité d'un nouveau client
        $gender = $request->genre;
        $married = $request->marie;
        $dependents = $request->dependence;
        $education = $request->education;
        $self_employed = $request->auto_emploi;
        $applicant_income = $request->revenu;
        $loan_amount = $request->credit;
        $loan_amount_term = $request->displayYears;
        $credit_history = $request->H_redit;
        $area = $request->zone;

        $new_data = [[$gender, $married, $dependents, $education, $self_employed, $applicant_income, $loan_amount, $loan_amount_term, $credit_history, $area]];

        $prediction = $estimator->predict($new_data);

        $property_area_label = $prediction[0] == 'Yes' ? 'Yes' : 'No';

        $prediction = new Preditct();
        $prediction->client_id = $so->id;
        $prediction->status = $property_area_label;
        $prediction->save();
        session()->flash('Add', 'Ajout a été effectué avec succès');
        return view('inform');
    }
}