@extends('layouts.master')

@section('content')
    <div class="ourweddings">
        <div class="medium-wrapper background">
            <h3 class="text-center">Notre dernier mariage</h3>
            <div class="toparticle clearfix">
                <div class="toparticle-big-picture pull-left">
                    <a href="{{url('ourweddings', [$toparticle->id, $toparticle->title])}}">
                        <figure>
                            <img src="{{url('uploads/pictures', $toparticle->pictures[5]->uri)}}" alt="{{$toparticle->pictures[5]->uri}}" width="720" height="470">
                            <figcaption>
                                {{$toparticle->event->customer->bride_name}} & {{$toparticle->event->customer->bridegroom_name}}<br>
                                <span>{{$toparticle->event->event_date}}</span>
                                <b class="pull-right">+</b>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="pull-left toparticle-small-picture-bloc">
                    <a class="toparticle-small-picture" href="{{url('ourweddings', [$toparticle->id, $toparticle->title])}}">
                        <figure>
                            <img src="{{url('uploads/pictures', $toparticle->pictures[1]->uri)}}" alt="{{$toparticle->pictures[1]->uri}}" width="377" height="230">
                            <figcaption>
                                {{$toparticle->event->customer->bride_name}} & {{$toparticle->event->customer->bridegroom_name}}<br>
                                <span>{{$toparticle->event->event_date}}</span>
                                <b class="pull-right">+</b>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="toparticle-small-picture" href="{{url('ourweddings', [$toparticle->id, $toparticle->title])}}">
                        <figure class="toparticle-small-picture-figure">
                            <img src="{{url('uploads/pictures', $toparticle->pictures[2]->uri)}}" alt="{{$toparticle->pictures[2]->uri}}" width="377" height="230">
                            <figcaption>
                                {{$toparticle->event->customer->bride_name}} & {{$toparticle->event->customer->bridegroom_name}}<br>
                                <span>{{$toparticle->event->event_date}}</span>
                                <b class="pull-right">+</b>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <p class="trame-others-pages"></p>
            <div class="row other-articles">
                <h3 class="text-center">Ils nous ont fait confiance</h3>
                @foreach($articles as $article)
                    <div class="col-md-4">
                        <a href="{{url('ourweddings', [$article->id, $article->title])}}">
                            <?php $pictures = $article->pictures ?>
                            <figure>
                                <img src="{{url('uploads/pictures', $pictures[0]->uri)}}" alt="{{$pictures[0]->uri}}" width="420" height="240">
                                <figcaption>
                                    {{$article->event->customer->bride_name}} & {{$article->event->customer->bridegroom_name}}<br>
                                    <span>{{$article->event->event_date}}</span>
                                    <b class="pull-right">+</b></figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href=""><p class="article-caret"></p></a>
            <p class="trame-others-pages"></p>
            <div class="others-pages">
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