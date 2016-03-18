@extends('layouts.master')

@section('content')
    <div class="admin">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th class="text-center">Nom de la marié</th>
                        <th class="text-center">Nom du mari</th>
                        <th class="text-center">Date du mariage</th>
                        <th class="text-center">Dossier</th>
                    </tr>
                    @foreach($customers as $customer)
                        <tr>
                            <td class="text-center">
                                <a href="{{url('dashboard/editCustomer', [$customer->user_id, $customer->user->name])}}">{{$customer->bride_name}}</a>
                            </td>
                            <td class="text-center">
                                <a href="{{url('dashboard/editCustomer', [$customer->user_id, $customer->user->name])}}">{{$customer->bridegroom_name}}</a>
                            </td>
                            <td class="text-center">
                                <p>{{$customer->event->event_date}}</p>
                            </td>
                            <td class="text-center">
                                <a href="{{url('admin/showFolder', [$customer->user_id, $customer->user->name])}}" id="{{$customer->user->name}}">
                                    <i class="fa fa-folder"></i>{{$customer->user->name}}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop