@extends('layouts.master')

@section('content')
    <div class="article">
        <div class="article-panorama-area">
            <figure class="article-panorama">
                <img src="{{url('uploads/pictures', $article->pictures[0]->uri)}}" alt="{{$article->title}} photo">
                <figcaption>{{$article->event->customer->bride_name}} & {{$article->event->customer->bridegroom_name}}</figcaption>
            </figure>
        </div>
        <div class="medium-wrapper background article-area">
            <div class="row">
                <div class="col-md-12 article-path">Accueil/Nos mariés/{{$article->event->customer->bride_name}} & {{$article->event->customer->bridegroom_name}}</div>
                <div class="col-md-12 text-center article-title">
                    <h3>{{$article->title}}<br>
                        <span>{{$article->event->customer->bride_name}} & {{$article->event->customer->bridegroom_name}}</span>
                    </h3>
                </div>
                <p class="trame-article"></p>
                @if(count($article->pictures) >= 5)
                <div class="article-date-social">
                    <p class="article-date">Publié le {{$article->created_at->format('d/m/Y')}}</p>
                    <div class="article-social">
                        <a href="https://www.facebook.com/profile.php?id=100001259359408&fref=ts"><div class="small-facebook"></div></a>
                        <a href="https://twitter.com/cplanner"><div class="small-twitter"></div></a>
                        <a href="https://www.instagram.com/caribbeanplanner/"><div class="small-instagram"></div></a>
                        <a href="https://www.pinterest.com/"><div class="small-pinterest"></div></a>
                    </div>
                </div>
                <div class="col-md-12 article-content-bloc">
                    <div class="col-md-6 article-timeline"><img class="article-content-img-left" src="{{url('uploads/pictures', $article->pictures[1]->uri)}}" alt="{{$article->title}} photo"></div>
                    <div class="col-md-5">
                        <p class="article-content-title">Thème, lieu et date du mariage ?</p>
                        @if($article->content_2) <p class="article-content">{{$article->content_1}}</p> @endif
                    </div>
                </div>
                <div class="col-md-12 article-content-bloc">
                    <div class="col-md-offset-1 col-md-5">
                        <p class="article-content-title title-aline-right article-timeline">Racontez-nous vos préparatifs</p>
                        @if($article->content_3) <p class="article-content">{{$article->content_2}}</p> @endif
                    </div>
                    <div class="col-md-6"><img src="{{url('uploads/pictures', $article->pictures[2]->uri)}}" alt="{{$article->title}} photo"></div>
                </div>
                <div class="col-md-12 article-content-bloc">
                    <div class="col-md-6 article-timeline"><img class="article-content-img-left" src="{{url('uploads/pictures', $article->pictures[3]->uri)}}" alt="{{$article->title}} photo"></div>
                    <div class="col-md-5">
                        <p class="article-content-title">Comment s’est déroulée la journée du mariage ?</p>
                        @if($article->content_4) <p class="article-content">{{$article->content_3}}</p> @endif
                    </div>
                </div>
                <div class="col-md-12 article-content-bloc">
                    <div class="col-md-offset-1 col-md-5">
                        <p class="article-content-title title-aline-right article-timeline">Un conseil pour les futurs mariés qui vous lisent ?</p>
                        @if($article->content_4) <p class="article-content">{{$article->content_4}}</p> @endif
                    </div>
                    <div class="col-md-6"><img src="{{url('uploads/pictures', $article->pictures[4]->uri)}}" alt="{{$article->title}} photo"></div>
                </div>
            </div>
            @endif
            <p class="trame-others-pages"></p>
            <div class="review-area row">
                <div><img src="{{url('assets/img/temoignages1.png')}}" alt="Quote photo"></div>
                @if($article->review) <p>{{$article->review->content}}</p> @endif
                <p class="signature">{{$article->event->customer->bride_name}} and {{$article->event->customer->bridegroom_name}}</p>
                <p>Partagez cet article</p>
                <div class="col-md-offset-2 col-md-8 review-social">
                    <a href="https://www.facebook.com/profile.php?id=100001259359408&fref=ts"><div class="facebook"></div></a>
                    <a href="https://twitter.com/cplanner"><div class="twitter"></div></a>
                    <a href="https://www.instagram.com/caribbeanplanner/"><div class="instagram"></div></a>
                    <a href="https://www.pinterest.com/"><div class="pinterest"></div></a>
                </div>
            </div>
            <p class="trame-others-pages"></p>
            <div class="row">
                <h3 class="text-center">D'autres mariages</h3>
                @foreach($others as $other)
                    <?php $p = $other->pictures ?>
                    <div class="col-md-5 article-others">
                        <a href="{{url('ourweddings', [$other->id, $other->title])}}">
                            <figure>
                                <img src="{{url('uploads/pictures', $p[0]->uri)}}" alt="{{$p[0]->uri}} photo" width="430">
                                <figcaption>
                                    {{$other->event->customer->bride_name}} & {{$other->event->customer->bridegroom_name}}<br>
                                    <span>{{$other->event->event_date}}</span>
                                    <b class="pull-right">+</b></figcaption>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
            <p class="trame-others-pages"></p>
            <div class="article-others-pages">
                <h4>En savoir plus? Ceci pourrait vous intéresser</h4>
                <div class="row">
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