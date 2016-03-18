@extends('layouts.master')

@section('content')
    <div class="event">
        <div class="medium-wrapper background">
            @include('admin.partials.adminNav')
            <h4 class="text-center">Complétez les détails d'évènement</h4>
            <div class="row event-form">
                <form method="POST" action="{{url('inscription/event')}}">
                    {!! csrf_field() !!}
                    <input name="customer_id" type="hidden" value="{{$customer->id}}">
                    <div class="col-md-offset-3 col-md-6 clearfix">
                        <div class="form-group">
                            <label for="event_name">Nom de l'évènement :</label><br>
                            <input class="form-control" id="event_name" name="event_name" type="text" value="{{old('event_name')}}">
                            @if ($errors->has('event_name'))
                                <span class="help-block">{{$errors->first('event_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="event_date">Date de l'évènement :</label><br>
                            <input class="form-control" id="event_date" name="event_date" type="date" placeholder="ex: 26/03/2016 03:30:18" value="{{old('event_date')}}">
                            @if ($errors->has('event_date'))
                                <span class="help-block">{{$errors->first('event_date')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="event_place">Lieu de l'évènement :</label><br>
                            <input class="form-control" id="event_place" name="event_place" type="text" value="{{old('event_place')}}">
                            @if ($errors->has('event_place'))
                                <span class="help-block">{{$errors->first('event_place')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Statut</label>
                            <input id="ongoing" name="status" type="radio" value="ongoing"><b>ongoing</b>
                            <input id="done" name="status" type="radio" value="done"><b>done</b>
                        </div>
                        <button class="pull-right" type="submit">Terminer</button>
                    </div>
                </form>
                <a class="btn-back-event col-md-offset-3" href="{{url('inscription/customer')}}"><button>Précédent</button></a>
            </div>
        </div>
    </div>
@stop