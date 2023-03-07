<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="{{ asset('elzero.css') }}" />
    <link rel="stylesheet" href="{{ asset('normalise.css') }}" />

    <link rel="stylesheet" href="{{ asset('all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('estilos.css') }}" />


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/main.js"></script>
    <script>
        function displayValues() {
            var years = document.getElementById("years").value;
            document.getElementById("displayYears").setAttribute("value", years);
        }
    </script>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>
    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo" style="text-decoration: none;">MAROC DE CREDIT</a>

            <ul class="main-nav">


                <li><a href="{{ route('welcome') }}"
                        style="
          color: rgb(72, 142, 203); font-weight: bold; text-decoration: none;">Accueil</a>



                </li>
            </ul>
        </div>
    </div>
    <!-- End Header -->
    @if ($errors->any())
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('Add'))
        <div class="uk-alert-success" uk-alert>
            <strong>{{ session()->get('Add') }}</strong>
            <a class="uk-alert-close" uk-close></a>
        </div>
    @endif
    <!-- Start Landing -->

    <div class="work-steps" id="work-steps">
        <h2 class="main-title">Ma demande de crédit</h2>
        <div class="container">
            <div class="aa">
                <form action="{{ route('rempli') }}" class="formulario" id="formulario" method="POST">
                    @csrf
                    @method('POST')

                    <div class="formulario__grupo" id="grupo__usuario">
                        <label for="usuario" class="formulario__label">Nom</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="name" id="usuario"
                                placeholder="Nom">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>

                    </div>


                    <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Prénom</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="prenom" id="nombre"
                                placeholder="Prénom">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>

                    </div>


                    <div class="formulario__grupo" id="grupo__password">
                        <label for="password" class="formulario__label">Genre
                        </label>
                        <div class="formulario__grupo-input">
                            <div class="uk-margin">
                                <div uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls" name="genre">
                                        <option value="">Please select...</option>
                                        <option value="Male">Homme</option>
                                        <option value="Female">Femme</option>

                                    </select>
                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="formulario__grupo" id="grupo__password2">
                        <label for="password2" class="formulario__label">Nombre de personnes à charge
                        </label>
                        <div class="formulario__grupo-input">
                            <div uk-form-custom="target: > * > span:first-child">
                                <select aria-label="Custom controls" name="dependence">
                                    <option value="">Please select...</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3+">3+</option>

                                </select>
                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>

                        </div>

                    </div>


                    <div class="formulario__grupo" id="grupo__correo">
                        <label for="correo" class="formulario__label">Auto-entrepreneur</label>
                        <div class="formulario__grupo-input">
                            <div class="uk-margin">
                                <div uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls" name="auto_emploi">
                                        <option value="">Please select...</option>
                                        <option value="Yes">oui</option>
                                        <option value="No">No</option>

                                    </select>
                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>



                    <div class="formulario__grupo" id="grupo__telefono">
                        <label for="telefono" class="formulario__label">Marié(e)
                        </label>
                        <div class="formulario__grupo-input">
                            <div class="uk-margin">
                                <div uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls" name="marie">
                                        <option value="">Please select...</option>
                                        <option value="Yes">Oui</option>
                                        <option value="No">No</option>

                                    </select>
                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="formulario__grupo" id="grupo__usuario">
                        <label for="usuario" class="formulario__label">Niveau d'éducation</label>
                        <div class="formulario__grupo-input">
                            <div class="formulario__grupo-input">
                                <div class="uk-margin">
                                    <div uk-form-custom="target: > * > span:first-child">
                                        <select aria-label="Custom controls" name="education">
                                            <option value="">Please select...</option>
                                            <option value="Graduate">Diplômée</option>
                                            <option value="Not Graduate">No Diplômée</option>

                                        </select>
                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Revenu mensuel net</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="revenu" id="nombre"
                                placeholder="Revenu mensuel net">

                        </div>

                    </div>



                    <div class="formulario__grupo" id="grupo__password2">
                        <label for="password2" class="formulario__label">Score Credit
                        </label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="credit" id="password"
                                placeholder="Montant du prêt">

                        </div>

                    </div>

                    <div class="formulario__grupo" id="grupo__password">
                        <label for="password" class="formulario__label">Durée du prêt (en mois)
                        </label>
                        <div class="formulario__grupo-input">
                            <input type="range" class="formulario__input"
                                placeholder="revenu mensuel du co-emprunteur" id="years" min="12"
                                max="480" value="12" step="12" oninput="displayValues();">
                            <p class="a33">Durée en mois :<input type="text" id="displayYears"
                                    name="displayYears" readonly></p>
                            <script>
                                displayValues();
                            </script>
                        </div>

                    </div>


                    <div class="formulario__grupo" id="hh">
                        <label for="ff" class="formulario__label ">Avez-vous un historique de crédit
                            satisfaisant ?</label>
                        <div class="formulario__grupo-input">
                            <div class="formulario__grupo-input">
                                <div class="uk-margin">
                                    <div uk-form-custom="target: > * > span:first-child">
                                        <select aria-label="Custom controls" name="H_redit">
                                            <option value="">Please select...</option>
                                            <option value="1">oui</option>
                                            <option value="0">Non</option>
                                        </select>
                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="formulario__grupo" id="r">
                        <label for="saad" class="formulario__label">zone de l'emprunteur</label>
                        <div class="formulario__grupo-input">
                            <div class="formulario__grupo-input">
                                <div class="uk-margin">
                                    <div uk-form-custom="target: > * > span:first-child">
                                        <select aria-label="Custom controls" name="zone">
                                            <option value="">Please select...</option>
                                            <option value="Urban">Urbain</option>
                                            <option value="Semiurban">Semi-urbain</option>
                                            <option value="Rural">Rural</option>
                                        </select>
                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="formulario__grupo" id="grupo__telefono">



                        <div class="formulario__grupo" id="grupo__terminos">
                            <label class="formulario__label">
                                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                                J'ai lu et j'accepte les termes et conditions d’utilisation du site et des données
                                personnelles
                            </label>
                        </div>

                        <div class="formulario__grupo formulario__grupo-btn-enviar">
                            <button type="submit" class="formulario__btn">Valider</button>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="box">
                <h3>MAROC DE CREDIT</h3>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook" style="text-decoration: none;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter" style="text-decoration: none;">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube" style="text-decoration: none;">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <p class="text">
                    Maroc De Credit BANK est assujetti à la loi N° 09-08, relative à la protection des personnes
                    physiques à
                    l'égard du
                    traitement des données personnelles et elle a pris ses dispositions pour en respecter la lettre et
                    l'esprit.
                </p>
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="#" style="text-decoration: none;">Importer lien 1</a></li>
                    <li><a href="#" style="text-decoration: none;">Importer lien 2</a></li>

                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">
                        Ecole Supérieure de Technologie , Route d'Eljadida, KM 7, CASABLANCA, Maroc</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">Heures d'ouverture : de 08h00 à 17h00</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+212624042919</span>
                        <span>+212500000000</span>
                    </div>
                </div>
            </div>
            <!---->
            <div class="box footer-gallery">
                <img src="imgs/gallery-01.png" alt="" />
                <img src="imgs/gallery-02.png" alt="" />
                <img src="imgs/gallery-03.jpg" alt="" />
                <img src="imgs/gallery-04.png" alt="" />
                <img src="imgs/gallery-05.jpg" alt="" />
                <img src="imgs/gallery-06.png" alt="" />
            </div>
        </div>
        <p class="copyright">
            © 2023 Maroc De Credit BANK. Tous droits réservés</p>
    </div>
    <!-- End Footer -->

</body>

</html>
