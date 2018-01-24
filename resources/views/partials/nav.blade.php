<nav class="navbar navbar-default"> <!-- Navbar by Shreyans Patel -->
    <section class="container">
        <header class="navbar-header">
            <a href="/" class="navbar-brand">
                <img src="{{ asset("images/logo.png") }}" width="150px"/>
            </a>
        </header>
        <ul class="nav navbar-nav">
            <li><span class="glyphicon glyphicon-envelope nav-icons"></span></li>
            <li><span class="glyphicon glyphicon-stats nav-icons"></span></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @guest
            <li><a href="{{ route('register') }}" class="nav-text">sign up</a></li>
            <li><a href="{{ route('login') }}" class="nav-text">log in</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="{{ route('user-profile', Auth::user()->slug) }}">My Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
                <li><a href="#" class="nav-text">tour</a></li>
                <li><a href="#" class="nav-text">help <span class="glyphicon glyphicon-menu-down"></span></a></li>
                <li><a href="#" class="nav-text">stack overflow careers</a></li>
        </ul>
    </section>
</nav>