@extends('layouts.master')

@section('content')
    <div class="admin-review">
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
                        <th class="text-center">Date du mariage</th>
                        <th class="text-center">Avis du client</th>
                        <th class="text-center">Status de l'avis</th>
                    </tr>
                    @foreach($testimonials as $testimonial)
                        <tr>
                            <td class="text-center">
                                <a href="{{url('dashboard/editCustomer', [$testimonial->user->id, $testimonial->user->name])}}">{{$testimonial->user->customer->bride_name}}</a>
                            </td>
                            <td class="text-center">
                                <a href="{{url('dashboard/editCustomer', [$testimonial->user->id, $testimonial->user->name])}}">{{$testimonial->user->customer->bridegroom_name}}</a>
                            </td>
                            <td class="text-center">
                                <p>{{$testimonial->user->customer->event->event_date}}</p>
                            </td>
                            <td class="text-center" width="400">
                                <p>{{$testimonial->comment}}</p>
                            </td>
                            <td class="text-center">
                                <a class="publish" href="{{url('addTestimonial', [$testimonial->id])}}">
                                    {{($testimonial->status == 'unpublished')? 'À publier' : 'Publié'}}
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