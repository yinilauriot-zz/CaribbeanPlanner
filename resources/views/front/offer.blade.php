@extends('layouts.master')

@section('content')
<div class="offer">
    <div class="medium-wrapper background">
        <h3 class="text-center">4 bonnes raisons de choisir<br>
            <span>Caribbean Planner pour votre mariage</span>
        </h3>
        <div class="row offer-reason">
            <div class="col-md-6">
                <h4 class="col-md-offset-5">Gain de temps</h4>
                <div class="clearfix">
                    <div class="offer-reason-img"><img class="pull-left" src="{{url('assets/img/icontile.png')}}" alt="Tile icon"></div>
                    <p class="pull-left">Bénéficiez du carnet d’adresses de l’équipe en Guadeloupe de Caribbean Planner.<br>
                        Épargnez-vous les soirs et week-end de recherches, les demandes de devis et comparaison du meilleur rapport qualité-prix à faire pour chaque prestataire.</p>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="col-md-offset-5">0% stress, 100% sérénité</h4>
                <div class="clearfix">
                    <div class="offer-reason-img"><img class="pull-left" src="{{url('assets/img/iconserenity.png')}}" alt="Serenity icon"></div>
                    <p class="pull-left">Fort de 6 ans d’expérience dans l’organisation de mariage à distance nous penserons à chaque détail. Notre sérieux et notre professionnalisme vous assureront d’un mariage sans soucis.</p>
                </div>
            </div>
        </div>
        <div class="row offer-reason">
            <div class="col-md-6">
                <h4 class="col-md-offset-5">Personnalisation</h4>
                <div class="clearfix">
                    <div class="offer-reason-img"><img class="pull-left" src="{{url('assets/img/icongear.png')}}" alt="Gear icon"></div>
                    <p class="pull-left">Nous établissons ensemble les choix décoratifs, donnez nous vos inspirations déco et vos demandes les plus folles et nous les réalisons!<br>
                        Un mariage unique qui vous ressemble dans les paysages paradisiaques des Antilles françaises.</p>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="col-md-offset-5">Originalité</h4>
                <div class="clearfix">
                    <div class="offer-reason-img"><img class="pull-left" src="{{url('assets/img/iconstar.png')}}" alt="Star icon"></div>
                    <p class="pull-left">Sortez des sentiers battus et venez célébrer votre union sur les îles de la Guadeloupe.<br>
                        Votre mariage les pieds dans l’eau saura surprendre vos invités.<br>
                        Votre mariage aura un goût de fêtes, soleil et cocotiers.</p>
                </div>
            </div>
        </div>
        <p class="trame-others-pages"></p>
        <div class="three-offers">
            <h3 class="col-md-offset-5">Nos offres</h3>
            <div class="text-center">
                <div class="each-offer-area">
                    <div class="each-offer-bloc">
                        <h4>Coup de pouce</h4>
                        <figure>
                            <img src="{{url('assets/img/offer1.png')}}" alt="Offer1 photo">
                            <figcaption>Recherches de<br>partenaires et de lieux</figcaption>
                        </figure>
                    </div>
                    <a id="link-offer-1" href="#offer-detail-1">Voir l'offre</a>
                </div>
                <div class="each-offer-area">
                    <div class="each-offer-bloc">
                        <h4>Coup de coeur</h4>
                        <figure>
                            <img src="{{url('assets/img/offer2.png')}}" alt="Offer2 photo">
                            <figcaption>Une organisation à la<br>carte</figcaption>
                        </figure>
                    </div>
                    <a id="link-offer-2" href="#offer-detail-2">Voir l'offre</a>
                </div>
                <div class="each-offer-area">
                    <div class="each-offer-bloc">
                        <h4>Coup de foudre</h4>
                        <figure>
                            <img src="{{url('assets/img/offer3.png')}}" alt="Offer3 photo">
                            <figcaption>Votre mariage géré par<br>Caribbean Planner de A à Z </figcaption>
                        </figure>
                    </div>
                    <a id="link-offer-3" href="#offer-detail-3">Voir l'offre</a>
                </div>
            </div>
        </div>
        <p class="trame-others-pages"></p>
        <div class="offer-detail">
            <div id="offer-detail-1" class="clearfix">
                <div class="pull-left offer-detail-img"><img src="{{url('assets/img/detail1.jpg')}}" alt="Detail1 photo"></div>
                <div class="pull-right offer-detail-text">
                    <div class="clearfix">
                        <img class="pull-left" src="{{url('assets/img/coupdepouce.png')}}" alt="Thumb photo">
                        <h4>
                            Coup de pouce<br>
                            <span>Recherches de partenaires et de lieux</span>
                        </h4>
                    </div>
                    <p>Vous organisez votre mariage vous-même mais avez des questions?<br>
                        Pour ce jour si spécial, offrez un regard d’experts sur vos choix.<br>
                        Nous vous ouvrons notre carnet d’adresses branchées et qualitatives et effectuons le casting et les demandes de devis à votre place pour vous faire gagner du temps.<br><br>
                        <i class="fa fa-plus"></i>Gagnez du temps avec nos sélections du meilleur de la Guadeloupe.<br>
                        <i class="fa fa-plus"></i>Sans vous déplacer, bénéficiez d'un carnet d'adresses d'expert, pour un mariage grandiose.
                    </p>
                </div>
            </div>
            <div id="offer-detail-2" class="clearfix">
                <div class="pull-left offer-detail-text">
                    <div class="clearfix">
                        <img class="pull-right" src="{{url('assets/img/coupdecoeur.png')}}" alt="Heart photo">
                        <h4 class="pull-right text-right">
                            Coup de coeur<br>
                            <span>Une organisation à la carte</span>
                        </h4>
                    </div>
                    <p>Il vous manque une conseillère en images, un créateur de robe de mariée, un photographe ou bien encore un artiste-performé ?<br>
                        Cessez toute recherche hasardeuse de prestataires mariage sur le web et laissez-vous chouchouter ! Grâce à notre sélection personnalisée, votre mariage sur mesure devient une réalité.<br>
                        Que cela soit une cérémonie laïque ou d’engagement, Caribbean Planner vous aide à organiser votre journée dans les moindres détails.<br><br>
                        <i class="fa fa-plus"></i>Plusieurs rendez-vous prévus, un suivi par mail, skype ou par téléphone.<br>
                        <i class="fa fa-plus"></i>Un espace privé en ligne pour avoir tout sous la main : planning, contrats, contacts...
                    </p>
                </div>
                <div class="pull-right offer-detail-img"><img src="{{url('assets/img/detail2.jpg')}}" alt="Detail2 photo"></div>
            </div>
            <div id="offer-detail-3" class="clearfix">
                <div class="pull-left offer-detail-img"><img src="{{url('assets/img/detail3.jpg')}}" alt="Detail3 photo"></div>
                <div class="pull-right offer-detail-text">
                    <div class="clearfix">
                        <img class="pull-left" src="{{url('assets/img/coupdefoudre.png')}}" alt="Lightning photo">
                        <h4>
                            Coup de foudre<br>
                            <span>Votre mariage géré par Caribbean Planner de A à Z </span>
                        </h4>
                    </div>
                    <p>Envie d’un mariage de rêve en Guadeloupe mais vous n’avez pas le temps, pas l’envie, pas les contacts ? Caribbean Planner est là pour tout prendre en charge et vous offrir le jour J PARFAIT !<br><br>
                        Avec Caribbean Planner, l’organisation de votre mariage ne sera plus qu’une partie de plaisir ! Votre seul rôle sera de nous indiquer vos souhaits et nous nous occupons du reste.<br><br>
                        Le jour J, nous serons là pour tout coordonner afin que vous n’ayez qu’une seule chose à faire : Only Just Married !<br><br>
                        <i class="fa fa-plus"></i>Plusieurs rendez-vous prévus, un suivi par mail, skype ou par téléphone<br>
                        <i class="fa fa-plus"></i>Un espace privé en ligne pour avoir tout sous la main : planning, contrats, contacts...
                    </p>
                </div>
            </div>
            <a class="col-md-offset-4" href="{{url('contact')}}">Contactez-nous</a>
        </div>
        <p class="trame-others-pages"></p>
        <div class="offer-others-pages">
            <h4>En savoir plus? Ceci pourrait vous intéresser :</h4>
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
                    <a href="{{url('guadeloupe')}}">
                        <figure>
                            <div class="view third-effect">
                                <img src="{{url('assets/img/savoirplus1.jpg')}}" alt="Savoirplus1 photo">
                                <div class="mask"></div>
                                <div class="content">
                                    <p class="info">Full Image</p>
                                </div>
                            </div>
                            <figcaption>Pourquoi chosir la Guadeloupe pour se marier?</figcaption>
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
            </div>
        </div>
        <p class="trame-others-pages"></p>
    </div>
</div>
@stop