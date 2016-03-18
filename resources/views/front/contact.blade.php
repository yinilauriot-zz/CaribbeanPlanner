@extends('layouts.master')

@section('content')
    <div class="contact">
        <div class="small-wrapper background">
            <h2 class="text-center">Contact</h2>
            <p class="text-center">Envie d'un mariage de rêve en Guadeloupe,<br>Envoyez-nous une demande et nous y répondrons avec plaisir.</p>
            @if (Session::has('message'))
                @include('front.partials.flash')
            @endif
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-body contact-form">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('storeContact') }}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-12">
                                    <label class="control-label">Votre nom* :</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-12">
                                    <label class="control-label">Votre email* :</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-12">
                                    <label class="control-label">Votre téléphone* :</label>
                                    <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}">
                                    @if ($errors->has('telephone'))
                                        <span class="help-block">{{ $errors->first('telephone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-12">
                                    <label class="control-label">Quelle est la meilleure période pour vous contacter :</label>
                                    <input type="text" class="form-control" name="period" value="{{ old('period') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-12">
                                    <label class="control-label">Type d'évènement* :</label>
                                    <input type="text" class="form-control" name="event" value="{{ old('event') }}" placeholder="Mariage complet, cérémonie de bord de plage, renouvellement de voeux...">
                                    @if ($errors->has('event'))
                                        <span class="help-block">{{ $errors->first('event') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-12">
                                    <label class="control-label">Dites-nous comment vous imaginez votre beau projet :</label>
                                    <textarea class="form-control" rows="10" name="content" placeholder="Date de l'évènement, nombre d'invités, ambiances, thèmes, animations ...">{{old('content')}}</textarea>
                                </div>
                            </div>
                            <p class="col-md-offset-3 col-md-12">Les champs marqués d'une * sont obligatoires</p>
                            <div class="col-md-offset-3 col-md-12 text-center robot">
                                <img src="{{url('assets/img/robot.png')}}" alt="Robot photo" width="300" height="78">
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-6 col-md-6 btn-contact-area">
                                    <button type="submit">Envoyez</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <p class="trame-large"></p>
            <div class="caribbeanplanner-contact">
                <div class="text-center">
                    <figure>
                        <img src="{{url('assets/img/Christina.png')}}" alt="Christina Photo">
                        <figcaption>
                            CHRISTINA POCHOT<br><span>wedding planner</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-4 guadeloupe-contact">
                        <p>France</p>
                        <address>
                            2 avenue Victor Hugo<br>
                            94130 Nogent sur Marne<br><br>
                            06 67 54 73 88
                        </address>
                        <a href="mailto:contact@caribbean-planner.com">contact@caribbean-planner.com</a>
                    </div>
                    <div class="col-md-offset-1 col-md-4">
                        <p>Guadeloupe</p>
                        <address>
                            73 rue Louis François Vatable<br>
                            97110 Pointe à pitre<br><br>
                            0690 72 86 86
                        </address>
                        <a href="mailto:contact@caribbean-planner.com">contact@caribbean-planner.com</a>
                    </div>
                </div>
            </div>
            <p class="trame-large"></p>
        </div>
    </div>
@stop