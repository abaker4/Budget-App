
<nav class="navbar is-primary" style="margin-bottom: 1.5rem;">
    <div class="navbar-brand">
        <a class="navbar-item" href="">
            {{--<img src="" alt="" width="112" height="28">--}}
        </a>

        <a class="navbar-item is-hidden-desktop" href="https://github.com/abaker4/Budget-App" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-github"></i>
      </span>
        </a>

        <div class="navbar-burger burger" data-target="navMenuExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navMenuExample" class="navbar-menu ">
        <div class="navbar-start">
            <a class="navbar-item" href="/" style="text-decoration:none;">
                Home
            </a>
        </div>
    </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped" style="margin-bottom: 2rem;">
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


