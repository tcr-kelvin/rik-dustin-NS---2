{{--<header>--}}
    {{--<div class="logo-container">--}}
        {{--<img src="https://photos-4.dropbox.com/t/2/AADZOXNtsZYIw8Gz63Uo6vm3CbdAGg8HlrVNpl0ZJl_OFA/12/158100610/png/32x32/1/_/1/2/logo.png/ELjj4ngYgKcHIAcoBw/WpSuSBJK4oKT__3KwOLwmvUimyo7FI6Mp84uC-IAOt4?preserve_transparency=1&size=1600x1200&size_mode=3" alt="TeleKing">--}}
    {{--</div>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                            {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}
    {{--<nav>--}}
        {{--<ul class="top-ul">--}}
            {{--<li class="top-li"><a href="/">Home</a></li>--}}
            {{--<li class="top-li"><a href="toestellen">Toestellen</a></li>--}}
            {{--<li class="top-li"><a href="abonnementen">Abonnementen</a>--}}
                {{--<ul class="in-ul">--}}
                    {{--<li class="in-li"><a href="sim-only">Sim-Only</a></li>--}}
                    {{--<li class="in-li"><a href="abonnement-toestel">Met toestel</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="top-li"><a href="support">Support & FAQ</a></li>--}}
        {{--</ul>--}}
    {{--</nav>--}}
{{--</header>--}}
<header class="main-header">
    <div class="pull-left">
        <img  class="main-logo"src="photos/logo.png" alt="TeleKing">
        <a class="header-button teleking-button" href="#">Bekijk de top-sellers</a>
    </div>
    <div class="pull-right">
        <nav>
            <ul class="nav-ul">
                <li> <a href="">Home</a> </li>
                <li> <a href="catlisting?alias=simonly">Sim-Only</a> </li>
                <li> <a href="catlisting?alias=simonly">Toestellen en Abonnementen</a> </li>
                <li> <a href="catlisting?alias=simonly">Support</a> </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
        <div class="account-icons">
            <a class="login-button" href="#" title="Winkelwagen"><i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
            <a class="login-button" href="#" title="Mijn Account"><i class="fa fa-user-circle" aria-hidden="true"></i> </a>
        </div>

    </div>

</header>