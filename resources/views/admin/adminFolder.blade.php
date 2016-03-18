@extends('layouts.master')

@section('content')
    <div class="admin">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            <h4>
                <a href="{{url('admin')}}">Tous les dossiers</a> / {{$name}}
            </h4>
            <div class="row admin-folders">
                @foreach($subfolders as $subfolder)
                    <div class="col-md-6">
                        <a href="{{url('admin/showFile', [$id, $name, $subfolder])}}" id="{{$name-$subfolder}}">
                            <i class="fa fa-folder"></i>{{$subfolder}}
                            @if($subfolder == 'Prestataires')(privé) @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop