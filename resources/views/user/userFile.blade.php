@extends('layouts.master')

@section('content')
    <div class="user-files">
        <div class="small-wrapper background clearfix">
            <h2 class="text-center">Espace privé</h2>
            @if (Session::has('message'))
                @include('front.partials.flash')
            @endif
            <h3 class="text-center">Mes dossiers</h3>
            <div class="user-files-bloc row">
                <h4 class="col-md-offset-2"><i class="fa fa-folder-open"></i>{{$subfolder}}</h4>
                @foreach($files as $file)
                    <div>
                        <span class="col-md-offset-3 col-md-6"><i class="fa fa-file"></i>{{$file}}</span>
                        <a class="glyphicon glyphicon-download-alt" href="{{url('user/downloadFile', [$user->id, $user->name, $subfolder, $file])}}" id="{{$file}}"></a>
                    </div>
                @endforeach
                <a class="col-md-offset-10 user-files-back" href="{{url('user', [$user->id, $user->name])}}"><button>Retour</button></a>
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop