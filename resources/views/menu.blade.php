<nav class="navbar navbar-fixed-top" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: #09814a;">
  <div class="container-fluid navbar-color">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/home') }}">OnTravel</a>
    </div>
    
        <ul class="nav navbar-nav navbar-right">
        @guest
            <li><a class="navbar-color" href="{{ route('login') }}" ><img src="images/login-user.png"/> Login</a></li>
            <li><a class="navbar-color" href="{{ route('register') }}"><img src="images/Register.png"/> Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle navbar-color" data-toggle="dropdown" role="button" aria-expanded="false">
                <img class="resize" 
                    @if (Auth::user()->imagen != '')
                        src="{{ Auth::user()->imagen }}"
                    @else
                        src="images/login-user.png"
                    @endif
                    >
                        @if (Auth::user()->is_admin == 1)
                            <strong>Admin |</strong>
                        @endif
                        {{ Auth::user()->name }}
                     <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <img src="images/logout.png"/>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
        </ul>
  </div>
</nav>
<div class="navbar"></div>