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
                {{--<img src="{{url('assets/img/logo.jpg')}}" alt="Caribbean Planner Logo">--}}
                Caribbean<span>planner</span>
            </h1>
            @include('partials.nav')
        </header>

        <main id="main" role="main">
            @yield('content')
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

    <?php
    $encryp = app('Illuminate\Encryption\Encrypter');
    $encryp_token = $encryp->encrypt(csrf_token());
    ?>
    <input type="hidden" name="token" id="token" value="{{ $encryp_token }}" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{url('assets/js/jquery.min.js')}}"><\/script>')</script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/app.min.js')}}"></script>
</body>
</html>