@extends('layouts.master')

@section('content')
    <div class="admin-article">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            <div class="row admin-article-form">
                <form method="POST" action="{{url('storeArticle')}}">
                    {{ csrf_field() }}
                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-group">
                            <label for="name">Choisir un couple :</label>
                            <select class="form-control" name="name">
                                <option value="" disabled></option>
                                @foreach($events as $event)
                                    <option value="{{$event->customer->user->name}}">{{$event->customer->user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Nom de l'article :</label>
                            <input class="form-control" id="title" name="title" type="text" value="{{old('title')}}">
                            @if ($errors->has('title'))
                                <span class="error">{{$errors->first('title')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Thème, lieu et date du mariage :</label>
                            <textarea class="form-control" rows="3" name="content_1">{{old('content_1')}}</textarea>
                            @if ($errors->has('content_1'))
                                <span class="help-block">
                                <strong>{{ $errors->first('content_1') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Racontez nous vos préparatifs :</label>
                            <textarea class="form-control" rows="3" name="content_2">{{old('content_2')}}</textarea>
                            @if ($errors->has('content_2'))
                                <span class="help-block">
                                <strong>{{ $errors->first('content_2') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Comment s’est déroulée la journée du mariage ?</label>
                            <textarea class="form-control" rows="3" name="content_3">{{old('content_3')}}</textarea>
                            @if ($errors->has('content_3'))
                                <span class="help-block">
                                <strong>{{ $errors->first('content_3') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Un conseil pour les futurs mariés qui vous lisent ?</label>
                            <textarea class="form-control" rows="3" name="content_4">{{old('content_4')}}</textarea>
                            @if ($errors->has('content_4'))
                                <span class="help-block">
                                <strong>{{ $errors->first('content_4') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Statut de l'article :</label>
                            <input id="opened" name="status" type="radio" value="opened"><b>opened</b>
                            <input id="closed" name="status" type="radio" value="closed"><b>closed</b>
                        </div>
                        <button class="btn-create-article col-md-offset-4" type="submit">Créer</button>
                    </div>
                </form>
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop