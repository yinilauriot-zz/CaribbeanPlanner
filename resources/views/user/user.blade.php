@extends('layouts.master')

@section('content')
    <div class="user">
        <div class="small-wrapper background">
            <h2 class="text-center">Espace privé</h2>
            @if (Session::has('message'))
                @include('front.partials.flash')
            @endif
            <div class="row user-info-bloc">
                <h3 class="text-center">Informations personnelles</h3>
                <div class="col-md-offset-1 col-md-5">
                    <p><b>Nom de la mariée</b> : {{$user->customer->bride_name}}</p>
                    <p><b>Nom du marie</b> : {{$user->customer->bridegroom_name}}</p>
                    <p><b>Téléphone</b> : {{$user->customer->telephone}}</p>
                </div>
                <div class="col-md-5">
                    <p><b>Email</b> : {{$user->email}}</p>
                    <address><b>Adresse</b> : {{$user->customer->address}} {{$user->customer->postal_code}} {{$user->customer->city}} {{$user->customer->country}}</address>
                    <p><b>Date de mariage prévue</b> : {{$user->customer->event->event_date}}</p>
                </div>
                <div class="col-md-offset-4 col-md-6">
                    <a href="{{url('user/editPersoInfo', [$user->id, $user->name])}}"><button>Modifier mes coordonnées</button></a>
                </div>
            </div>
            <p class="trame-large"></p>
            <div  class="user-folders row">
                <h3 class="text-center">Mes dossiers</h3>
                @foreach($subfolders as $subfolder)
                    @if($subfolder != 'PRESTATAIRES')
                        <div class="col-md-5">
                            <a href="{{url('user/showFile', [$user->id, $user->name, $subfolder])}}" id="{{$subfolder}}">
                                <i class="fa fa-folder"></i>{{$subfolder}}
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <p class="trame-large"></p>
            <div class="user-review">
                <h3 class="text-center">Déposez un avis sur Caribbean Planner</h3>
                <p class="text-center">Félicitations! Vous êtes maintenant de jeunes mariés! Dîtes-nous ce que vous avez penser de l'organisation de votre mariage avec Caribbean Planner. Ce message sera publié sur notre site.</p>
                <div>
                    <form class="form-horizontal" method="POST" action="{{url('user/storeComment', [$user->id, $user->name])}}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        @foreach($user->testimonials as $testimonial)
                            <p class="review"><b>{{$testimonial->created_at}}</b> : {{$testimonial->comment}}</p>
                        @endforeach
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-8">
                                <label class="control-label">Ajoutez un avis sur Caribbean Planner :</label>
                                <textarea class="form-control" rows="5" name="comment">{{old('comment')}}</textarea>
                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('comment') }}</strong>
                                </span>
                                @endif
                                <button class="btn-user-avis" type="submit">Ajoutez</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p class="trame-large"></p>
        </div>
    </div>
@stop