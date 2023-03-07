<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MC</title>

    <link rel="stylesheet" href="{{ asset('normalise.css') }}" />
    <link rel="stylesheet" href="{{ asset('elzero.css') }}" />
    <link rel="stylesheet" href="{{ asset('all.min.css') }}" />


    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />

    <script>
        function displayValues() {
            var amount = document.getElementById("amount").value;
            var interest = document.getElementById("interest").value;
            var years = document.getElementById("years").value;
            document.getElementById("displayAmount").innerHTML = amount;
            document.getElementById("displayInterest").innerHTML = interest;
            document.getElementById("displayYears").innerHTML = years;
        }

        function calculate() {
            var amount = document.getElementById("amount").value;
            var interest = document.getElementById("interest").value;
            var years = document.getElementById("years").value;
            var int = interest / 12 / 100;
            var monthlyPayment = amount * int / (1 - (Math.pow(1 / (1 + int), years)));

            document.getElementById("result").innerHTML = "Le paiement mensuel sera de : " + monthlyPayment.toFixed(2);
        }
    </script>





</head>

<body>
    <script src="js/main.js"></script>

    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo">MAROC DE CREDIT</a>

            <ul class="main-nav">
                <!--
        <li><a href="#articles">Articles</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#features">Features</a>
          <div class="mega-menu">
            <div class="image">
              <img src="imgs/megamenu.png" alt="" />
            </div>
            <ul class="links">
              <li>
                <a href="#testimonials"><i class="far fa-comments fa-fw"></i> Testimonials</a>
              </li>
              <li>
                <a href="#team"><i class="far fa-user fa-fw"></i> Team Members</a>
              </li>
              <li>
                <a href="#services"><i class="far fa-building fa-fw"></i> Services</a>
              </li>
              <li>
                <a href="#our-skills"><i class="far fa-check-circle fa-fw"></i> Our Skills</a>
              </li>
              <li>
                <a href="#work-steps"><i class="far fa-clipboard fa-fw"></i> How It Works</a>
              </li>
            </ul>
            <ul class="links">
              <li>
                <a href="#events"><i class="far fa-calendar-alt fa-fw"></i> Events</a>
              </li>
              <li>
                <a href="#pricing"><i class="fas fa-server fa-fw"></i> Pricing Plans</a>
              </li>
              <li>
                <a href="#video"><i class="far fa-play-circle fa-fw"></i> Top Videos</a>
              </li>
              <li>
                <a href="#stats"><i class="far fa-chart-bar fa-fw"></i> Stats</a>
              </li>
              <li>
                <a href="#discount"><i class="fas fa-percent fa-fw"></i> Request A Discount</a>
              </li>
            </ul>
          </div>
        </li>
     -->

                <li><a href="#" style="
          color: rgb(72, 142, 203); font-weight: bold">Identifiant</a>



                </li>
            </ul>
        </div>
    </div>
    <!-- End Header -->

    <!-- Start Landing -->
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>CRÉDIT EN LIGNE</h1>
                <p class="a1"><br>Souscrivez à votre crédit conso en quelques clics !</p></br>

                <p>Besoin de financer un projet immédiat en toute liberté et facilité ?

                    <br> Le crédit conso est la solution qui vous convient</br>
                </p>
            </div>
            <div class="image">
                <img src="imgs/im1-removebg-preview.png" alt="" />
            </div>
        </div>
        <a href="#articles" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </div>
    <!-- End Landing -->
    <!-- Start Articles -->
    <div class="articles" id="articles">
        <h2 class="main-title">CREDIT</h2>
        <div class="container">
            <div class="box">
                <img src="imgs/rr.jpeg" alt="" />
                <div class="content">
                    <h3>les travailleurs votre crédit consommation à taux réduit!</h3>
                    <p>Vous êtes salarié ou retraité du secteur privé et souhaitez profiter d'un crédit personnel
                        avantageux
                        directement prélevé sur votre compte bancaire ?</p>
                </div>
                <div class="info">
                    <a href="{{ route('inform') }}">En savoir plus</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/c.jpg" alt="" />
                <div class="content">
                    <h3>crédit employer, le crédit consommation spécial fonctionnaires</h3>
                    <p>Vous êtes fonctionnaire du secteur public ? Vous souhaitez profiter d’un crédit à un taux
                        avantageux
                        prélevé directement sur votre salaire ? crédit du maroc </p>
                </div>
                <div class="info">
                    <a href="{{ route('inform') }}">En savoir plus</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/a.jpeg" alt="" />
                <div class="content">
                    <h3>crédit immobilier : Pour vous offrir votre appartement</h3>
                    <p>Vous voulez acheter votre appartement mais vous avez besoin d'un apport personnel ? credit
                        immobilier de
                        Maroc du credit est conçu spécialement pour vous !</p>
                </div>
                <div class="info">
                    <a href="{{ route('inform') }}">En savoir plus</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="imgs/mm.jpeg" alt="" />
                <div class="content">
                    <h3>crédit moto : Achetez votre moto dès maintenant !</h3>
                    <p>Vous êtes passionné par la moto et vous voulez passer à l’action ? Avec credit moto de Maroc du
                        credit,
                        partez à
                        l'aventure, on s'occupe du reste ! credit du
                    </p>
                </div>
                <div class="info">
                    <a href="{{ route('inform') }}">En savoir plus</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <!--

    -->
        </div>
    </div>
    <div class="spikes"></div>
    <!-- End Articles -->
    <!-- Start Gallery -->
    <div class="gallery" id="gallery">
        <h2 class="main-title">Simulateur de crédit</h2>
        <div class="container">
            <p class="a1">Montant du crédit : <input style="left: px;position: relative;" type="range"
                    id="amount" min="1000" max="100000" step="1000" value="10000"
                    oninput="calculate(); displayValues();" style="left: 10px;position: relative;"></p>
            <p class="a2">Taux d'intérêt : <input style="left: px;position: relative;" type="range"
                    id="interest" min="1" max="20" step="1" value="5"
                    oninput="calculate(); displayValues();"></p>
            <p class="a3">Durée en mois : <input type="range" id="years" min="12" max="84"
                    value="36" step="6" oninput="calculate(); displayValues();"></p>
            <br><br>
            <p class="a11">Montant du crédit : <span id="displayAmount"></span></p>
            <p class="a12">Taux d'intérêt : <span id="displayInterest"></span></p>
            <p class="a33">Durée en mois : <span id="displayYears"></span></p>
            <p class="w"><span id="result"> </span>Dhs</p>
            <script>
                displayValues();
                calculate();
            </script>
        </div>
    </div>
    <!-- End Gallery -->


    <div class="spikes"></div>
    <!-- End Team -->


    <!-- End Skills -->
    <!-- Start Work Steps -->
    <div class="work-steps" id="work-steps">
        <h2 class="main-title">AVANTAGES DE NOTRE OFFRE EN LIGNE</h2>
        <div class="container">
            <img src="imgs/p-removebg-preview.png" alt="" class="image" />
            <div class="info">
                <div class="box">
                    <img src="imgs/th-removebg-preview.png" alt="" />
                    <div class="text">
                        <h3>Confort</h3>
                        <p>
                            Souscrivez à votre crédit conso sans vous déplacer
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="imgs/tt-removebg-preview.png" alt="" />
                    <div class="text">
                        <h3>Sécurité</h3>
                        <p>
                            Effectuez votre demande en toute simplicité directement sur votre espace sécurisé.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="imgs/ty-removebg-preview.png" alt="" />
                    <div class="text">
                        <h3>Rapidité</h3>
                        <p>
                            Bénéficiez d'une réponse immédiate et d'un traitement rapide sans avoir besoin de vous
                            déplacer en agence.
                        </p>
                    </div>
                </div>
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
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
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
                    <li><a href="#">Importer lien 1</a></li>
                    <li><a href="#">Importer lien 2</a></li>

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
