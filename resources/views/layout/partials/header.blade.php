
<header class="header">
    <div class="pull-left">
        <div class="header-brand">
            <img  class="main-logo"src="{{asset('photos/logo.png')}}" alt="TeleKing">
            <a class="teleking-button" href="#">Bekijk de top-sellers</a>
        </div>
    </div>
    <div class="pull-right">
        <nav class="primary-nav">
            <ul>
                <li> <a href="/">Home</a> </li>
                <li> <a href="catlisting?alias=Sim-Only">Sim-Only</a> </li>
                <li> <a href="catlisting?alias=Toestellen%20en%20Abonnementen">Toestellen en Abonnementen</a> </li>
                <li> <a href="support">Support</a> </li>
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
                            <a class="btn btn-primary" href="{{ route('user.index') }}">home</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <form id="logout-form" action="{{ route('user.index') }}" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
        <div class="account-icons">
            <a class="login-button" href="/winkelwagen" title="Winkelwagen"><span id="count-cart">X</span> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
            <a class="login-button" href="#" title="Mijn Account"><i class="fa fa-user-circle" aria-hidden="true"></i> </a>
        </div>

    </div>

</header>