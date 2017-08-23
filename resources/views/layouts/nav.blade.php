<style>
    .field{
        height: 50px;
    }
    input:hover {
        opacity: .9;
    }
    #button{
        border-style: solid;
        border-radius: 10px;
        border-color: white;

    }
    a, a:hover{
        text-decoration: none;
    }

    .common-Button {
        white-space: nowrap;
        display: inline-block;
        height: 40px;
        line-height: 40px;
        padding: 0 14px;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
        background: #fff;
        border-radius: 4px;
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .025em;
        text-decoration: none;
        transition: all .15s ease;
    }

    .common-Button:hover{

        transform:translateY(-1px);
        box-shadow:0 7px 14px rgba(50,50,93,.1),0 3px 6px rgba(0,0,0,.08);
    }

    .common-Button:active{

        background-color:#f6f9fc;
        transform:translateY(1px);
        box-shadow:0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08)
    }
    .common-ButtonGroup .common-Button{
        -ms-flex-negative:0;
        flex-shrink:0;margin:10px
    }


</style>

<nav class="navbar" style="margin-bottom: 1.5rem;">
    <div class="navbar-brand">
        <a class="navbar-item common-Button" href="/">
            <img src="/img/image2.png"alt="logo" width="30" height="30" data-step="1" data-position='left' data-intro="Welcome to the Budget App where managing money couldn't be easier. Feel free to hit next and take a tour of the dashboard or hit skip to exit.">
        </a>
    </div>
            <div class="navbar-burger burger" data-target="toggleTarget">
                <span></span>
                <span></span>
                <span></span>
            </div>
         </div>

        <div class="nav-menu nav-right" id="toggleTarget">
            <a class="navbar-item has-text-centered" href="/">
                Home
            </a>
            @if (Auth::guest())
            <a class="navbar-item has-text-centered common-Button" href="/login">
                Log In
            </a>
            <a class="navbar-item has-text-centered common-Button" href="/register">
                Register
            </a>
            @else
                <div class="dropdown" style="margin-bottom: 1rem;">
                    <a href="#" class="dropdown-toggle button is-primary common-Button" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span>{{Auth::user()->name}}</span> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu" style="text-align: center;">
                        <li>
                            <a class= "common-Button" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form"  action="{{ route('logout') }}" method="POST" style="display: none;">
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
                        <a class="button common-Button" href="{{ route('login') }}" style="background-color:#0275d8; color:white; text-decoration:none;">

                            <span>Login</span>
                        </a>
                    </p>
                    <p class="control">
                        <a class="button common-Button" href="{{ route('register') }}"  style="text-decoration:none;">

                            <span>Register</span>
                        </a>
                    </p>
                    @else
                        <div class="dropdown" style="margin-bottom: 2rem;">
                            <a href="#" class="dropdown-toggle button is-transparent common-Button" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span>{{Auth::user()->name}}</span> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="text-align: center;">
                                <li>
                                    <a class="common-Button" href="{{ route('logout') }}"
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
  </nav>


