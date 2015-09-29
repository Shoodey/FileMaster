<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">FileMaster</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::guest())
                <li><a href="{{ url('auth/login') }}">Se connecter</a></li>
                <li><a href="{{ url('auth/register') }}">S'inscrire</a></li>
            @else
                <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }} <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('auth/logout') }}">Se déconnecter</a></li>
                        @if(Auth::user()->rank === 'admin')
                            <li class="divider"></li>
                            <li><a href="{{ url('/') }}">Administration</a></li>
                        @endif
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>