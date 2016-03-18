@extends('layouts.master')

@section('content')
    <div class="admin-article">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            @if (Session::has('message'))
                @include('front.partials.flash')
            @endif
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th class="text-center">Nom de l'article</th>
                        <th class="text-center">Nom de la marié</th>
                        <th class="text-center">Nom du mari</th>
                        <th class="text-center">Status de l'article</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    @foreach($articles as $article)
                        <tr>
                            <td class="text-center">
                                <a href="{{url('ourweddings', [$article->id, $article->title])}}">{{$article->title}}</a>
                            </td>
                            <td class="text-center">
                                <a href="{{url('dashboard/editCustomer', [$article->event->customer->user_id, $article->event->customer->user->name])}}">{{$article->event->customer->bride_name}}</a>
                            </td>
                            <td class="text-center">
                                <a href="{{url('dashboard/editCustomer', [$article->event->customer->user_id, $article->event->customer->user->name])}}">{{$article->event->customer->bridegroom_name}}</a>
                            </td>
                            <td class="text-center">
                                <a href="{{url('article/status', $article->id)}}">
                                    <img src="{{($article->status == 'published')? url('assets/img/buttonOn.png') : url('assets/img/buttonOff.png')}}">
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="glyphicon glyphicon-edit" href="{{url('editArticle', [$article->id, $article->title])}}"></a>
                                <a class="glyphicon glyphicon-trash" href="{{url('deleteArticle', [$article->id, $article->title])}}"></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop