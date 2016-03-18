<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Caribbean Planner</title>
    <meta name="description" content="Forte de 4 ans d’expérience réussi dans l’organisation de mariage en Guadeloupe, l’agence Caribbean Planner mets aujourd’hui à votre disposition une consultante en Ile de France afin de vous aider dans la gestion de votre réception.">
    <meta name="keywords" lang="fr" content="events, événements, fêtes, paris, beach, plage, guadeloupe, antilles, mariage, organisation, wedding planner, ceremonie, cérémonie, mariee, mariée, marie, marié, reception, réception, coordination, cle en main, clé en main, ceremonie laique, cérémonie laïque, eglise, église, salle, traiteur, restaurant, hotel, hôtel, vin d'honneur, orchestre, faire-part, dragees, dragées, alliances, fleurs, pacs, union, fiancailles, fiançailles, declaration de mariage, déclaration de mariage, animation, decoration, décoration, robe de mariee, robe de mariée, habit de mariage, smoking, habit enfant, maitre de ceremonie, maître de cérémonie, photographe, videaste, vidéaste, video, vidéo, fleuriste, arrangement floral, coiffure, maquillage, voyage de noces">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="wrap">
        <header id="header" role="banner" class="clearfix">
            <h1 class="pull-left">
                <a href="{{url('/')}}">Caribbean<span>planner</span></a></h1>
            @include('partials.nav')
        </header>

        <main id="main" role="main">
            <div id="main-slider">
                <h2 class="text-center">
                    Du rêve à la réalité<br>
                    <span>Confiez-nous votre mariage</span>
                </h2>
            </div>
            <div id="agency">
                <div class="wrapper">
                    <h2 class="text-center">Caribbean Planner</h2>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <figure>
                                <img src="{{url('assets/img/Agence1.png')}}" alt="Agence1 Photo">
                                <figcaption>évènements</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 text-center">
                            <figure>
                                <img src="{{url('assets/img/Agence2.png')}}" alt="Agence2 Photo">
                                <figcaption>d'expériences</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 text-center">
                            <figure>
                                <img src="{{url('assets/img/Agence3.png')}}" alt="Agence3 Photo">
                                <figcaption>de bonheur</figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="text-center">
                        <a id="agency-btn" href="{{url('agency')}}">Découvrir l'agence</a>
                    </div>
                </div>
            </div>
            <div id="guadeloupe">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{url('assets/img/guadeloupebg.jpg')}}">
                    <div class="wrapper guadeloupe-bloc">
                        <h2 class="text-center">La Guadeloupe</h2>
                        <div class="text-center">
                            <p>Le cocktail du bonheur, ambiance, soleil</p>
                            <a id="guadeloupe-btn" href="{{url('guadeloupe')}}">Découvrir la Guadeloupe</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="offer">
                <div class="wrapper">
                    <h2 class="text-center">Nos offres</h2>
                    <div class="row">
                        <figure class="text-center col-md-4">
                            <img src="{{url('assets/img/Mariage1.png')}}" alt="Mariage1 Photo">
                            <figcaption>
                                <h3>A la carte</h3>
                                <p>Préparez votre marriage<br>vous même tout en ayant<br>notre carnet d’adresse<br>et notre expertise</p>
                            </figcaption>
                        </figure>
                        <figure class="text-center col-md-4">
                            <img src="{{url('assets/img/Mariage2.png')}}" alt="Mariage2 Photo">
                            <figcaption>
                                <h3>Sur mesure</h3>
                                <p>Nous prendrons en main<br>votre mariage pour vous faire<br>vivre un moment de rêve<br>comme vous l’avez imaginer</p>
                            </figcaption>
                        </figure>
                        <figure class="text-center col-md-4">
                            <img src="{{url('assets/img/Mariage3.png')}}" alt="Mariage3 Photo">
                            <figcaption>
                                <h3>Tout compris</h3>
                                <p>Profitez de nos merveilleuses plages<br>et d’un décor somptueux<br>pour tous vos évènements</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="text-center">
                        <a id="offer-btn" href="{{url('offer')}}">Découvrir</a>
                    </div>
                </div>
            </div>
            <div id="ourweddings">
                <a href="{{url('ourweddings')}}">
                    <div class="parallax-window" data-parallax="scroll" data-image-src="{{url('assets/img/temoignage.jpg')}}">
                        <div class="wrapper text-center">
                            <h2 class="text-center">Nos mariés</h2>
                            <h3>Une journée inoubliable, un vrai rêve, un pur bonheur.<br>Encore merci à toi Christina pour ta disponibilité, ton efficacité, ton<br>imagination débordante, tu es très professionnelle.</h3>
                            <p>Tania et Cédric</p>
                        </div>
                    </div>
                </a>
            </div>
            <div id="contact">
                <div class="container text-center">
                    <h2 class="text-center">Votre rêve est accessible</h2>
                    <p>Préparons ensemble votre mariage</p>
                    <div class="text-center">
                        <img src="{{url('assets/img/heart.png')}}" alt="Christina Photo" width="250">
                    </div>
                    <div class="text-center">
                        <a id="contact-btn" href="{{url('contact')}}">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </main>

        <footer id="footer" role="contentinfo">
            <h1 class="col-md-3">
                <a href="{{url('/')}}">Caribbean<span>planner</span></a>
            </h1>
            <div id="social" class="col-md-9">
                <a href="https://www.facebook.com/profile.php?id=100001259359408&fref=ts">
                    <div class="footer-facebook"></div>
                </a>
                <a id="instagram" href="https://www.instagram.com/caribbeanplanner/">
                    <div class="footer-instagram"></div>
                </a>
                <p>
                    France métropolitaine : 06 67 54 73 88<span>Guadeloupe : 0690 72 86 86</span>
                    <span>Email : contact@caribbean-planner.com</span>
                </p>
            </div>
            <p class="text-center col-md-12">Mentions légales</p>
        </footer>
    </div>

    <div>
        <a href="#header" id="topofpage"></a>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{url('assets/js/jquery.min.js')}}"><\/script>')</script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/parallax.min.js')}}"></script>
    <script src="{{url('assets/js/app.min.js')}}"></script>
</body>
</html>