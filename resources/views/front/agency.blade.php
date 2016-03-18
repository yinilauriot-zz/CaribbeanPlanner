@extends('layouts.master')

@section('content')
<div class="agency">
    <div class="medium-wrapper background">
        <div class="text-center agency-title">
            <h3>L’agence Caribbean Planner</h3>
            <p>Caribbean planner vous fait passer du rêve à la réalité grâce à son<br>wedding planner en  France et de son équipe en Guadeloupe</p>
        </div>
        <div class="christina-bloc clearfix">
            <div class="christina-bloc-img"><img src="{{url('assets/img/christina.jpg')}}" alt="Christina photo"></div>
            <div class="christina-bloc-text">
                <h5>CHRISTINA POCHOT<br><span>Wedding planner</span></h5>
                <p>
                    Avec 6 ans d’expériences dans l’organisation de mariage à distance, nous vous vous assureront de profiter pleinement de votre événement et d’avoir un service de qualité à la hauteur de votre investissement grâce à nos procédures éprouvées, nos échanges réguliers ainsi que notre expertise dans l’organisation d’évènements.<br><br>
                    <b><em>''</em> Libérez-vous de vos doutes et du stress nous les transformerons en confiance et satisfaction. <em>''</em></b><br><br>
                    La passion de l’événementiel est gravée dans sa peau et elle regorge d’idées plus originales les unes que les autres !<br><br>
                    Avec Christina, la Guadeloupe n’a jamais été aussi près
                </p>
            </div>
        </div>
        <div class="thierry-bloc clearfix">
            <div class="thierry-bloc-text">
                <h5>THIERRY<br><span>Chargé de relation partenaires</span></h5>
                <p>
                    Il recherche et gère les partenaires en Guadeloupe, il visite, déguste, teste les animations tels que les yacht et les catamaran et ils rencontrent les DJ. Il ne s’en plaint pas!<br>
                    C’est également Thierry qui négocie les prix, qui établit le mode de financement pour vous et qui planifie les dates et horaires des évènements ainsi qu’une réunion de pré-mariage entre les mariés et les prestataires.<br><br>
                    <b><em>''</em> Aucun prestataire ne peut être sélectionné si je ne l'ai pas personnellement rencontré et testé! <em>''</em></b><br><br>
                    Il connaît parfaitement aussi bien Grande Terre que Basse Terre et il s’aura trouver le lieux, le traiteur et l’animation qui correspondra à vos attentes.
                </p>
            </div>
            <div class="thierry-bloc-img"><img src="{{url('assets/img/thierry.jpg')}}" alt="Thierry photo"></div>
        </div>
        <div class="pascale-bloc clearfix">
            <div class="pascale-bloc-img"><img src="{{url('assets/img/pascale.jpg')}}" alt="Pascale photo"></div>
            <div class="pascale-bloc-text">
                <h5>PASCALE<br><span>Décoratrice</span></h5>
                <p>
                    Elle propose plusieurs planches de décorations (de table, florales, de la cérémonie en bord de mer…) en fonction de vos inspirations et grâce à son expérience<br>
                    Un plan de table original, des cadeaux invités en fonction de votre thème, un livre d’or photo et encore plus de choses à vous proposez …<br>
                    Le jour J, elle vient avec son équipe préparer la décoration afin que tout soit parfait pour vous et vos invités.<br><br>
                    <b><em>''</em> Envie d’une décoration originale et à votre image ? Nous avons sans cesse des idées à proposer ! <em>''</em></b><br><br>
                    Chaque mariage est unique, c’est pour cela que nous nous attachons à créer une ambiance sur mesure pour VOUS.
                </p>
            </div>
        </div>
        <p class="trame-others-pages"></p>
        <div class="engagement">
            <h3 class="text-center">Notre engagement</h3>
            <p>
                <b>Une équipe de professionnels</b> qui organise pour vous et avec vous votre événement.<br><br>
                Nous mettons à votre disposition <b>6 ans de savoir faire</b> dans l’organisation d’évènements et de mariage à distance.<br><br>
                Nos valeurs basées sur <b>le service de qualité lié à la convivialité</b><br><br>
                Vos inspirations décoratives aiguilleront notre décoratrice afin de vous proposer <b>un mariage unique et personnalisé</b>.
            </p>
        </div>
        <p class="trame-others-pages"></p>
        <div class="agency-offer">
            <h3 class="text-center">Passons du rêve à la réalité!<br> Et on fait comment?</h3>
            <div>
                <div class="text-center"><img src="{{url('assets/img/liste1.png')}}"></div>
                <div class="agency-offer-text">
                    <p>Dîtes nous qui vous êtes, nous vous dirons quel mariage est fait pour vous</p>
                    <ul>
                        <li><img src="{{url('assets/img/arrow.png')}}">Un questionnaire préliminaire vous est envoyé afin de connaître vos goûts et vos besoins</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">Notre Wedding Planner, Christina vous contacte pour affiner votre demande</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="text-center"><img src="{{url('assets/img/liste2.png')}}"></div>
                <div class="agency-offer-text">
                    <p>Recevez gratuitement* un devis avec toutes les prestations demandées</p>
                    <ul>
                        <li><img src="{{url('assets/img/arrow.png')}}">Le devis est gratuit en région parisienne.</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">Les déplacement sont déduits si l’organisation de votre mariage se fait avec Caribbean Planner.</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="text-center"><img src="{{url('assets/img/liste3.png')}}"></div>
                <div class="agency-offer-text">
                    <p>Le meilleur de la Guadeloupe s’invite à votre mariage</p>
                    <ul>
                        <li><img src="{{url('assets/img/arrow.png')}}">Le devis vous convient, alors c’est parti!</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">L’équipe de Caribbean Planner se met à la recherche des prestataires qui répondent à vos critères pour faire de votre mariage celui dont vous aviez rêvé.</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">Seuls les meilleurs vous sont présentés.</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">Rencontrez-les avant le mariage par téléphone, skype ou une fois arrivée en Guadeloupe.</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="text-center"><img src="{{url('assets/img/liste4.png')}}"></div>
                <div class="agency-offer-text">
                    <p>N’en perdez pas une miette !</p>
                    <ul>
                        <li><img src="{{url('assets/img/arrow.png')}}">La création de votre espace privé sur le site de Caribbean Planner vous permet de centraliser toutes les informations pratiques concernant votre mariage par catégories : cérémonie, animations, traiteur, fleuriste, coiffeur, dj…</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">Un rétro planning est établit pour suivre l’avancé de votre mariage</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">Une feuille de route permet de suivre le déroulé du Jour J étape par étape et notamment le rappel de l’heure d’arrivée de chaque partenaires de votre mariage</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="text-center"><img src="{{url('assets/img/liste5.png')}}"></div>
                <div class="agency-offer-text">
                    <p>Le jour J : Only Just Married</p>
                    <ul>
                        <li><img src="{{url('assets/img/arrow.png')}}">Tout a été fait pour que vous ayez l’esprit tranquille et les mains libres</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">Libre de célébrer, fêter et profiter de cette belle journée d’amour et de partage</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">Christina œuvre dans les coulisses pour que chaque chose soit à sa place au bon moment</li>
                        <li><img src="{{url('assets/img/arrow.png')}}">Alors le jour J ne soyez ni organisateur, ni décorateur, ni DJ mais uniquement des mariés : Only Just Married!</li>
                    </ul>
                </div>
            </div>
            <a class="col-md-offset-4" href="{{url('contact')}}">Contactez-nous</a>
        </div>
        <p class="trame-others-pages"></p>
        <div class="agency-others-pages">
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