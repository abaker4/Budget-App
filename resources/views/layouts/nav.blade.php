
<nav class="navbar is-transparent" style="margin-bottom: 1.5rem;">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="/img/image2.png" alt="logo" width="30" height="30">
        </a>
        <div class="navbar-burger burger" data-target="toggleTarget">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


        <div class="nav-menu nav-right" id="toggleTarget">
            <a class="navbar-item has-text-centered" href="/" style="text-decoration:none;">
                Home
            </a>
            @if (Auth::guest())
            <a class="navbar-item has-text-centered" href="/login" style="text-decoration:none;">
                Log In
            </a>
            <a class="navbar-item has-text-centered" href="/register" style="text-decoration:none;">
                Register
            </a>
            @else
                <div class="dropdown" style="margin-bottom: 1rem;">
                    <a href="#" class="dropdown-toggle button is-transparent" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span>{{Auth::user()->name}}</span> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu" style="text-align: center;">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            @endif
        </div>

        <div class="navbar-end">
            <div class="navbar-item is-hidden-mobile">
                <div class="field is-grouped">
                    <p class="control">
                        @if (Auth::guest())
                        <a class="button is-transparent" href="{{ route('login') }}">
                                          <span class="icon">
                                             <i class="fa fa-lock"></i>
                                          </span>
                            <span>Login</span>
                        </a>
                    </p>
                    <p class="control">
                        <a class="button is-transparent" href="{{ route('register') }}">
                                      <span class="icon">
                                         <i class="fa fa-lock"></i>
                                      </span>
                            <span>Register</span>
                        </a>
                    </p>
                    @else
                        <div class="dropdown" style="margin-bottom: 2rem;">
                            <a href="#" class="dropdown-toggle button is-transparent" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span>{{Auth::user()->name}}</span> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="text-align: center;">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
  </nav>


