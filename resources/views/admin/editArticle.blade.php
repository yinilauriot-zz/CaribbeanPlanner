@extends('layouts.master')

@section('content')
    <div class="admin-article">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            <div class="row admin-article-form">
                <form method="POST" action="{{url('updateArticle', [$article->id, $article->title])}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$article->id}}">
                    <input type="hidden" name="event_id" value="{{$article->event_id}}">
                    <div class="col-md-offset-3 col-md-6 clearfix">
                        <div class="form-group">
                            <label class="" for="title">Nom de l'article :</label>
                            <input class="form-control" id="title" name="title" type="text" value="{{$article->title}}"><br>
                            @if ($errors->has('title'))
                                <span class="help-block">{{$errors->first('title')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Thème, lieu et date du mariage :</label>
                            <textarea class="form-control" rows="5" name="content_1">{{$article->content_1}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Racontez nous vos préparatifs :</label>
                            <textarea class="form-control" rows="5" name="content_2">{{$article->content_2}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Comment s’est déroulée la journée du mariage ?</label>
                            <textarea class="form-control" rows="5" name="content_3">{{$article->content_3}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Un conseil pour les futurs mariés qui vous lisent ?</label>
                            <textarea class="form-control" rows="5" name="content_4">{{$article->content_4}}</textarea>
                        </div>
                        <div class="form-group">
                            @if($article->pictures)
                                @foreach($article->pictures as $picture)
                                    <div class="admin-article-form-img">
                                        <fieldset>
                                            <img class="" src="{{url('uploads/pictures', $picture->uri)}}" width="300">
                                            <input name="remove_{{$picture->title}}" type="radio" value="true">Supprimer
                                        </fieldset>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Statut de l'article :</label>
                            <input id="published" name="status" type="radio" value="published" {{($article->status == 'published')? 'checked' : ''}}><b>published</b>
                            <input id="unpublished" name="status" type="radio" value="unpublished" {{($article->status == 'unpublished')? 'checked' : ''}}><b>unpublished</b>
                        </div>
                        <button class="pull-right" type="submit">Sauvegarder</button>
                    </div>
                </form>
                <a class="btn-back-article" href="{{url('article')}}"><button>Retour</button></a>
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop