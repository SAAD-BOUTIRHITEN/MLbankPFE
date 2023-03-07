<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('prenom');
            $table->char('Gender');
            $table->char('Married');
            $table->integer('Dependents');
            $table->char('Education');
            $table->char('Self_Employed');
            $table->integer('ApplicantIncome');
            $table->integer('LoanAmount');
            $table->integer('Loan_Amount_Term');
            $table->integer('Credit_History');
            $table->char('Property_Area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
