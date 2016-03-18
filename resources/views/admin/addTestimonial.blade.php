@extends('layouts.master')

@section('content')
    <div class="admin-review">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            @if (Session::has('message'))
                @include('front.partials.flash')
            @endif
            <div class="row admin-review-form">
                <form method="POST" action="{{url('storeTestimonial')}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-group">
                            <label for="subfolder">Choisir un article :</label>
                            <select class="form-control" name="article_id">
                                <option value="" disabled></option>
                                @foreach($articles as $article)
                                    <option value="{{$article->id}}" {{($testimonial->user->customer->event->article->id == $article->id)? 'selected' : ''}}>{{$article->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ajouter un avis dans l'article :</label>
                            <textarea class="form-control" rows="5" name="comment">{{$testimonial->comment}}</textarea>
                            @if ($errors->has('comment'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('comment') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Statut de l'avis :</label>
                            <input id="published" name="status" type="radio" value="published" {{($testimonial->status == 'published')? 'checked' : ''}}><b>published</b>
                            <input id="unpublished" name="status" type="radio" value="unpublished" {{($testimonial->status == 'unpublished')? 'checked' : ''}}><b>unpublished</b>
                        </div>
                        <button type="submit">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop