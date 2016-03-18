@extends('layouts.master')

@section('content')
<div class="guadeloupe">
    <div class="medium-wrapper background">
        <h3 class="text-center">Pourquoi se marier en Guadeloupe ?</h3>
        <div class="guadeloupe-why clearfix">
            <div class="guadeloupe-why-img pull-left"><img src="{{url('assets/img/sandrine-frederic.jpg')}}" alt="Sandrine & Frédéric photo"></div>
            <div class="guadeloupe-why-text pull-right">
                <b>Envie d’un mariage au soleil, les pieds dans l’eau ?<br>
                    Mais vous ne parlez pas anglais, ni grecs et encore moins thaïlandais ?
                    <br>Pensez aux DOM-TOM et restez en France!</b><br><br>
                    Rien ne vous a plu dans votre région?<br>
                    Vous ne vous reconnaissez pas dans l’ambiance d’ancienne ferme, château ou abbaye.<br>
                    Alors, venez en Guadeloupe pour un depaysement total dans un cadre paradisiaque où la fête est une seconde nature pour les habitants de l’archipel!<br>
                    C'est l'occasion de faire un mariage intimiste entouré de la famille et les amis proches.<br><br>
                    <span>Un mixte de vacances, mariage et lune de miel.</span>
            </div>
        </div>
        <div class="guadeloupe-advantage">
            <h3 class="text-center">La Guadeloupe c’est avant tout :</h3>
            <div class="row text-center">
                <figure class="col-md-3">
                    <img src="{{url('assets/img/iconsun.png')}}" alt="Sun icon">
                    <figcaption>8000 heures<br>d’ensoleillement<br>par an</figcaption>
                </figure>
                <figure class="col-md-3">
                    <img src="{{url('assets/img/iconwater.png')}}" alt="Water icon">
                    <figcaption>35°c dans l’eau</figcaption>
                </figure>
                <figure class="col-md-3">
                    <img src="{{url('assets/img/iconpassport.png')}}" alt="Passport icon">
                    <figcaption>DOM : nul besoin<br>de passeport ou<br>de visa</figcaption>
                </figure>
                <figure class="col-md-3">
                    <img src="{{url('assets/img/iconlangue.png')}}" alt="Language icon">
                    <figcaption>Le français : la<br>langue officielle</figcaption>
                </figure>
            </div>
        </div>
        <div class="guadeloupe-what">
            <h3 class="text-center">Qu’est-ce qu’on y fait?</h3>
            <div class="row">
                <figure class="col-md-offset-1 col-md-5">
                    {{--<div class="grow pic">
                        <a href="http://www.lesilesdeguadeloupe.com/" target="_blank"><img src="{{url('assets/img/quoifaire1.jpg')}}" alt="Guadeloupe photo" width="430"></a>
                    </div>--}}
                    <img src="{{url('assets/img/quoifaire1.jpg')}}" alt="Guadeloupe photo">
                    <figcaption>
                        <h5>On bulle</h5>
                        <p>Sous les palmiers, sirotez un cocktail au soleil et profitez de ce moment de détente.</p>
                        <p>On ne vous le dis pas assez : détendez-vous et amusez-vous!</p>
                        <p>Et pourquoi pas Caribbean Planner s'occupe du reste.</p>
                    </figcaption>
                </figure>
                <figure class="col-md-5">
                    {{--<div class="grow pic">
                        <a href="http://www.lesilesdeguadeloupe.com/" target="_blank"><img src="{{url('assets/img/quoifaire2.jpg')}}" alt="Guadeloupe photo" width="430"></a>
                    </div>--}}
                    <img src="{{url('assets/img/quoifaire2.jpg')}}" alt="Guadeloupe photo">
                    <figcaption>
                        <h5>Des balades en bateau</h5>
                        <p>Yacht, Catamaran, scooter de mer, voiliers...</p>
                        <p>Vous aurez l'embarras du choix pour visiter les plages et les îles de l'archipel guadeloupéen.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="row">
                <figure class="col-md-offset-1 col-md-5">
                    {{--<div class="grow pic">
                        <a href="http://www.lesilesdeguadeloupe.com/" target="_blank"><img src="{{url('assets/img/quoifaire3.jpg')}}" alt="Guadeloupe photo" width="430"></a>
                    </div>--}}
                    <img src="{{url('assets/img/quoifaire3.jpg')}}" alt="Guadeloupe photo">
                    <figcaption>
                        <h5>On goûte la gastronomie locale</h5>
                        <p>Dégustations de rhum et de punch, restaurants typiques, accras, bouchons ou colombo. Vous pourrez épicer votre séjour.</p>
                    </figcaption>
                </figure>
                <figure class="col-md-5">
                    {{--<div class="grow pic">
                        <a href="http://www.lesilesdeguadeloupe.com/" target="_blank"><img src="{{url('assets/img/quoifaire4.jpg')}}" alt="Guadeloupe photo" width="430"></a>
                    </div>--}}
                    <img src="{{url('assets/img/quoifaire4.jpg')}}" alt="Guadeloupe photo">
                    <figcaption>
                        <h5>Plongée sous marine</h5>
                        <p>Les fonds de la mer se visitent aussi!</p>
                        <p>Avec un tuba ou en snorkeling observer la vie sous-marine dans les eaux transparentes de Marie-Galante ou de Gosier ou encore de Saint-François.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="row">
                <figure  class="col-md-offset-1 col-md-5">
                    {{--<div class="grow pic">
                        <a href="http://www.lesilesdeguadeloupe.com/" target="_blank"><img src="{{url('assets/img/quoifaire5.jpg')}}" alt="Guadeloupe photo" width="430"></a>
                    </div>--}}
                    <img src="{{url('assets/img/quoifaire5.jpg')}}" alt="Guadeloupe photo">
                    <figcaption>
                        <h5>On découvre, l’histoire et la culture de l’archipel</h5>
                        <p>Musées ou marché aux épices. Il y en a pour tous les goûts.</p>
                    </figcaption>
                </figure>
                <figure  class="col-md-5">
                    {{--<div class="grow pic">
                        <a href="http://www.lesilesdeguadeloupe.com/" target="_blank"><img src="{{url('assets/img/quoifaire6.jpg')}}" alt="Guadeloupe photo" width="430"></a>
                    </div>--}}
                    <img src="{{url('assets/img/quoifaire6.jpg')}}" alt="Guadeloupe photo">
                    <figcaption>
                        <h5>Séjour vert</h5>
                        <p>Le point culminant de la Guadeloupe, la Soufrière se visite à pied. Entrez dans le coeur de l'archipel.</p>
                    </figcaption>
                </figure>
            </div>
        </div>
        <p class="trame-others-pages"></p>
        <div class="guadeloupe-bref">
            <h3 class="text-center">La Guadeloupe en bref</h3>
            <div class="row">
                <div class="col-md-5">
                    <h4>À savoir</h4>
                    <p><b>Langues</b> : le français</p>
                    <p><b>Papiers (UE)</b> : carte d'identité en cours de validité</p>
                    <p><b>Vaccins obligatoires</b> : aucun</p>
                    <p><b>Monnaie</b> : l'Euro</p>
                </div>
                <div class="col-md-5">
                    <h4>Informations pratiques</h4>
                    <p><b>Prix des billets d’avion</b> : dès 400€ l’Aller/retour  (hors période de Carnaval et décembre)</p>
                    <p><b>Durée de vol direct</b> : 8h30</p>
                    <p><b>Décalage horaire</b> : - 6h en été, - 5h en hiver</p>
                    <p><b>Période idéale de départ</b> : de décembre à juin (saison sèche ou carême)</p>
                </div>
            </div>
        </div>
        <p class="trame-others-pages"></p>
        <div class="guadeloupe-others-pages">
            <h4>En savoir plus? Ceci pourrait vous intéresser</h4>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{url('ourweddings')}}">
                        <figure>
                            <div class="view third-effect">
                                <img src="{{url('assets/img/savoirplus4.jpg')}}" alt="Savoirplus4 photo">
                                <div class="mask"></div>
                                <div class="content">
                                    <p class="info">Full Image</p>
                                </div>
                            </div>
                            <figcaption>Les témoignages des mariés précédents</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{url('agency')}}">
                        <figure>
                            <div class="view third-effect">
                                <img src="{{url('assets/img/savoirplus2.jpg')}}" alt="Savoirplus2 photo">
                                <div class="mask"></div>
                                <div class="content">
                                    <p class="info">Full Image</p>
                                </div>
                            </div>
                            <figcaption>Pourquoi prendre un wedding planner?</figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{url('offer')}}">
                        <figure>
                            <div class="view third-effect">
                                <img src="{{url('assets/img/savoirplus3.jpg')}}" alt="Savoirplus3 photo">
                                <div class="mask"></div>
                                <div class="content">
                                    <p class="info">Full Image</p>
                                </div>
                            </div>
                            <figcaption>Découvrez nos offres de services</figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
        <p class="trame-others-pages"></p>
    </div>
</div>
@stop