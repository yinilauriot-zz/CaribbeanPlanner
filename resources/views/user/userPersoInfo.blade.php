@extends('layouts.master')

@section('content')
    <div class="user-info">
        <div class="small-wrapper background">
            <h2 class="text-center">Espace privé</h2>
            <div class="row user-info-form">
                <h3 class="text-center">Mes coordonnées</h3>
                <form class="form-horizontal" method="POST" action="{{url('user/updatePersoInfo', [$user->id, $user->name])}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="col-md-offset-3 col-md-6 clearfix">
                        <div class="form-group">
                            <label for="bride_name">Nom de la mariée :</label>
                            <input class="form-control" id="bride_name" name="bride_name" type="text" value="{{$user->customer->bride_name}}">
                            @if ($errors->has('bride_name'))
                                <span class="help-block">{{$errors->first('bride_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="bridegroom_name">Nom du mari :</label>
                            <input class="form-control" id="bridegroom_name" name="bridegroom_name" type="text" value="{{$user->customer->bridegroom_name}}">
                            @if ($errors->has('bridegroom_name'))
                                <span class="help-block">{{$errors->first('bridegroom_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="address">Adresse :</label>
                            <input class="form-control" id="address" name="address" type="text" value="{{$user->customer->address}}">
                            @if ($errors->has('address'))
                                <span class="help-block">{{$errors->first('address')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="postal_code">Code postal :</label>
                            <input class="form-control" id="postal_code" name="postal_code" type="text" value="{{$user->customer->postal_code}}">
                            @if ($errors->has('postal_code'))
                                <span class="help-block">{{$errors->first('postal_code')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="city">Ville :</label>
                            <input class="form-control" id="city" name="city" type="text" value="{{$user->customer->city}}">
                            @if ($errors->has('city'))
                                <span class="help-block">{{$errors->first('city')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="country">Pays :</label>
                            <input class="form-control" id="country" name="country" type="text" value="{{$user->customer->country}}">
                            @if ($errors->has('country'))
                                <span class="help-block">{{$errors->first('country')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="telephone">Téléphone :</label>
                            <input class="form-control" id="telephone" name="telephone" type="text" value="{{$user->customer->telephone}}">
                            @if ($errors->has('telephone'))
                                <span class="help-block">{{$errors->first('telephone')}}</span>
                            @endif
                        </div>
                        <button class="pull-right" type="submit">Sauvegarder</button>
                    </div>
                </form>
                <a class="btn-back-user-info" href="{{url('user', [$user->id, $user->name])}}"><button>Retour</button></a>
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop