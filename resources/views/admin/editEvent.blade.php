@extends('layouts.master')

@section('content')
    <div class="event">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            <div class="row event-form">
                <form method="POST" action="{{url('updateEvent')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="customer_id" value="{{$user->customer->id}}">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-group">
                            <label for="event_name">Nom de l'évènement :</label>
                            <input class="form-control" id="event_name" name="event_name" type="text" value="{{$user->customer->event->event_name}}">
                            @if ($errors->has('event_name'))
                                <span class="help-block">{{$errors->first('event_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="event_date">Date de l'évènement :</label>
                            <input class="form-control" id="event_date" name="event_date" type="date" value="{{$user->customer->event->getDateEnglish()}}">
                            @if ($errors->has('event_date'))
                                <span class="help-block">{{$errors->first('event_date')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="event_place">Lieu de l'évènement :</label>
                            <input class="form-control" id="event_place" name="event_place" type="text" value="{{$user->customer->event->event_place}}">
                            @if ($errors->has('event_place'))
                                <span class="help-block">{{$errors->first('event_place')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="" for="status">Statut de l'évènement :</label>
                            <input id="ongoing" name="status" type="radio" value="ongoing" {{($user->customer->event->status == 'ongoing')? 'checked' : ''}}><b>ongoing</b>
                            <input id="done" name="status" type="radio" value="done" {{($user->customer->event->status == 'done')? 'checked' : ''}}><b>done</b>
                        </div>
                        <button type="submit">Sauvegarder</button>
                    </div>
                </form>
            </div>
        </div>
        <p class="trame-large"></p>
    </div>
@stop