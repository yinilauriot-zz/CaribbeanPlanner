<nav id="navigation" role="navigation" class="pull-right">
    <div class="clearfix">
        <ul class="nav nav-pills minor-nav pull-right">
            <li><a id="btn-customer-space" class="current" href="@if(Auth::check() && Auth::user()->role == 'administrator') {{url('dashboard')}} @elseif(Auth::check() && Auth::user()->role == 'visitor') {{url('user', [Auth::user()->id, Auth::user()->name])}} @else {{url('login')}} @endif">{{trans('app.account')}}</a></li>
            @if(Auth::check())
                <li><a class="{{Request::is('logout') ? 'current' : ''}}" href="{{url('logout')}}">{{trans('app.logout')}}</a></li>
            @endif
            <li><a class="language" href="{{url('fr')}}">FR</a></li>
            <li><a class="language" href="{{url('en')}}">EN</a></li>
        </ul>
    </div>
    <ul class="nav nav-pills main-nav">
        <li><a class="{{Request::is('/') ? 'active' : ''}}" href="{{url('/')}}">{{trans('app.home')}}</a></li>
        <li><a class="{{Request::is('agency') ? 'active' : ''}}" href="{{url('agency')}}">{{trans('app.agency')}}</a></li>
        <li><a class="{{Request::is('guadeloupe') ? 'active' : ''}}" href="{{url('guadeloupe')}}">{{trans('app.guadeloupe')}}</a></li>
        <li><a class="{{Request::is('offer') ? 'active' : ''}}" href="{{url('offer')}}">{{trans('app.offer')}}</a></li>
        <li><a class="{{Request::is('ourweddings', 'ourweddings/*') ? 'active' : ''}}" href="{{url('ourweddings')}}">{{trans('app.ourweddings')}}</a></li>
        <li><a class="{{Request::is('contact') ? 'active' : ''}}" href="{{url('contact')}}">{{trans('app.contact')}}</a></li>
    </ul>
</nav>