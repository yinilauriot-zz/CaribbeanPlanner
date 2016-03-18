@extends('layouts.master')

@section('content')
    <div class="admin">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            @if (Session::has('message'))
                @include('front.partials.flash')
            @endif
            <div class="clearfix">
                <h4 class="pull-left">
                    <a href="{{url('admin')}}">Tous les dossiers</a> /
                    <a href="{{url('admin/showFolder', [$id, $name])}}">{{$name}}</a> /
                    {{$subfolder}}
                </h4>
                <form class="pull-right" method="POST" action="{{url('admin/uploadFile', [$id, $name, $subfolder])}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <span class="btn btn-default btn-file">
                        Ajouter un document <input type="file" name="file">
                    </span>
                    <input class="btn btn-default btn-file" type="submit" value="Upload">
                </form>
            </div>
            <div class="admin-files">
                @foreach($files as $file)
                    <div>
                        <span class="col-md-offset-1 col-md-6"><i class="fa fa-file"></i>{{$file}}</span>
                        <a class="glyphicon glyphicon-download-alt" href="{{url('admin/downloadFile', [$id, $name, $subfolder, $file])}}" id="{{$file}}"></a>
                        <a class="glyphicon glyphicon-trash" href="{{url('admin/deleteFile', [$id, $name, $subfolder, $file])}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop