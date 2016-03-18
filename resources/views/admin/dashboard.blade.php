@extends('layouts.master')

@section('content')
    <div class="dashboard">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            @if (Session::has('message'))
                @include('front.partials.flash')
            @endif
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th class="text-center">Nom de la marié</th>
                        <th class="text-center">Nom du mari</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Téléphone</th>
                        <th class="text-center">Date de l'évènement</th>
                        <th class="text-center">Nom de l'évènement</th>
                        <th class="text-center">Statut de l'évènement</th>
                    </tr>
                    @foreach($events as $event)
                        <tr>
                            <td class="text-center">
                                <a href="{{url('dashboard/editCustomer', [$event->customer->user_id, $event->customer->user->name])}}">{{$event->customer->bride_name}}</a>
                            </td>
                            <td class="text-center">
                                <a href="{{url('dashboard/editCustomer', [$event->customer->user_id, $event->customer->user->name])}}">{{$event->customer->bridegroom_name}}</a>
                            </td>
                            <td class="text-center">
                                <a href="mailto:{{$event->customer->user->email}}">{{$event->customer->user->email}}</a>
                            </td>
                            <td class="text-center">{{$event->customer->telephone}}</td>
                            <td class="text-center">{{$event->event_date}}</td>
                            <td class="text-center">
                                <a href="{{url('dashboard/editEvent', [$event->customer->user_id, $event->customer->user->name])}}">{{$event->event_name}}</a>
                            </td>
                            <td class="text-center">
                                <a href="{{url('dashboard/status', $event->customer->user_id)}}">
                                    <img src="{{($event->status == 'ongoing')? url('assets/img/buttonOn.png') : url('assets/img/buttonOff.png')}}">
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