@extends('layouts.master')

@section('content')
    <div class="customer">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            <h4 class="text-center">Complétez les coordonnées du client : </h4>
            <div class="row customer-form">
                <form method="POST" action="{{url('inscription/customer')}}">
                    {!! csrf_field() !!}
                    <input name="user_id" type="hidden" value="{{$user->id}}">
                    <div class="col-md-offset-3 col-md-6 clearfix">
                        <div class="form-group">
                            <label for="bride_name">Nom de la mariée :</label><br>
                            <input class="form-control" id="bride_name" name="bride_name" type="text" value="{{!empty($customer)? $customer->bride_name: old('bride_name')}}">
                            @if ($errors->has('bride_name'))
                                <span class="help-block">{{$errors->first('bride_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="bridegroom_name">Nom du mari :</label><br>
                            <input class="form-control" id="bridegroom_name" name="bridegroom_name" type="text" value="{{!empty($customer)? $customer->bridegroom_name: old('bridegroom_name')}}">
                            @if ($errors->has('bridegroom_name'))
                                <span class="help-block">{{$errors->first('bridegroom_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="address">Adresse :</label><br>
                            <input class="form-control" id="address" name="address" type="text" value="{{!empty($customer)? $customer->address: old('address')}}">
                            @if ($errors->has('address'))
                                <span class="help-block">{{$errors->first('address')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="postal_code">Code postal :</label><br>
                            <input class="form-control" id="postal_code" name="postal_code" type="text" value="{{!empty($customer)? $customer->postal_code: old('postal_code')}}">
                            @if ($errors->has('postal_code'))
                                <span class="help-block">{{$errors->first('postal_code')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="city">Ville :</label><br>
                            <input class="form-control" id="city" name="city" type="text" value="{{!empty($customer)? $customer->city: old('city')}}">
                            @if ($errors->has('city'))
                                <span class="help-block">{{$errors->first('city')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="" for="country">Pays :</label><br>
                            <input class="form-control" id="country" name="country" type="text" value="{{!empty($customer)? $customer->country: old('country')}}">
                            @if ($errors->has('country'))
                                <span class="help-block">{{$errors->first('country')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="telephone">Téléphone :</label><br>
                            <input class="form-control" id="telephone" name="telephone" type="text" value="{{!empty($customer)? $customer->telephone: old('telephone')}}">
                            @if ($errors->has('telephone'))
                                <span class="help-block">{{$errors->first('telephone')}}</span>
                            @endif
                        </div>
                        <button class="pull-right" type="submit">Suivant</button>
                    </div>
                </form>
                <a class="btn-back-customer" href="{{url('inscription/user')}}"><button>Précédent</button></a>
            </div>
        </div>
    </div>
@stop