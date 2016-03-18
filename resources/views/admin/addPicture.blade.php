@extends('layouts.master')

@section('content')
    <div class="admin-picture">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            <div class="row admin-picture-form">
                <form method="POST" action="{{url('article/storePicture')}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-group">
                            <label for="subfolder">Choisir un article :</label>
                            <select class="form-control" name="title">
                                <option value="" disabled></option>
                                @foreach($articles as $article)
                                    <option value="{{$article->title}}">{{$article->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="add-file-area">
                            <div class="form-group">
                                <label for="thumbnail_1">Choisir une photo :</label>
                                <input class="form-control" name="thumbnail_1" type="file">
                            </div>
                        </div>
                        <div class="pull-right"><a href="" class="glyphicon glyphicon-plus add-file"></a></div>
                        <button type="submit">Ajouter à l'article</button>
                    </div>
                </form>
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop