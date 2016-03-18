@extends('layouts.master')

@section('content')
    <div class="inscription">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            <div class="row">
                <form method="POST" action="{{url('inscription/user')}}">
                    {!! csrf_field() !!}
                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-group">
                            <label for="name">Nom du dossier :</label><br>
                            <input class="form-control" id="name" name="name" type="text" placeholder="ex: Marie-Jean" value="{{!empty($user)? $user->name: old('name')}}">
                            @if ($errors->has('name'))
                                <span class="help-block">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label><br>
                            <input class="form-control" id="email" name="email" type="email" value="{{!empty($user)? $user->email: old('email')}}">
                            @if ($errors->has('email'))
                                <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe :</label><br>
                            <input class="form-control" id="password" name="password" type="password"><br>
                            @if ($errors->has('password'))
                                <span class="help-block">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmer le mot de passe :</label><br>
                            <input class="form-control" id="password_confirmation" name="password_confirmation" type="password">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                            @endif
                        </div>
                        <button type="submit">Suivant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop