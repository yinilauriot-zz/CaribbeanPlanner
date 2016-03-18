@extends('layouts.master')

@section('content')
    <div class="login">
        <div class="small-wrapper background">
            <h3 class="text-center">Bienvenue dans votre<br>espace privé</h3>
            @if (Session::has('message'))
                @include('front.partials.flash')
            @endif
            <div class="row">
                <div class="col-md-offset-3 col-md-6 login-form">
                    <form role="form" method="POST" action="{{ url('login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} login-form-input">
                            <label>{{trans('app.email')}}</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} login-form-input">
                            <label>{{trans('app.password')}}</label>
                            <input type="password" class="form-control" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="radio" name="remember" value="true"> {{trans('app.remember')}}
                            </label>
                        </div>
                        <div class="text-center btn-login">
                            <button type="submit">Se connecter</button>
                            <a class="" href="{{ url('/') }}">{{trans('app.resetPassword')}}</a>
                        </div>
                    </form>
                </div>
            </div>
            <p class="trame-large"></p>
        </div>
    </div>
@stop