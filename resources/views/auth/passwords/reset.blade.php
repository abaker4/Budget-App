
<!DOCTYPE html>
<html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.css">
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
                  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
                  crossorigin="anonymous">
            <link rel="stylesheet" href="css/introjs.css">
            <link rel="stylesheet" href="css/themes/introjs-modern.css">
            <link rel="stylesheet" href="/css/sweetalert.css">
            <link rel="stylesheet" href="/css/main.css">
            <script src="https://use.fontawesome.com/e5fa0f90ea.js"></script>

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
            </style>
    </head>
    <body>
        <nav class="navbar" style="margin-bottom: 1.5rem;">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
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
                <a class="navbar-item has-text-centered" href="/" style="text-decoration: none;">
                    Home
                </a>
                @if (Auth::guest())
                    <a class="navbar-item has-text-centered" href="/login" style="text-decoration: none;">
                        Log In
                    </a>
                    <a class="navbar-item has-text-centered" href="/register" style="text-decoration: none;">
                        Register
                    </a>
                @else
                    <div class="dropdown" style="margin-bottom: 1rem; text-decoration: none;">
                        <a href="#" class="dropdown-toggle button is-primary" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span>{{Auth::user()->name}}</span> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" style="text-align: center;">
                            <li>
                                <a class= href="{{ route('logout') }}"
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
                                <a class="button" href="{{ route('login') }}" style="background-color:#0275d8; color:white;">
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
        </nav>

        <section class="hero is-fullheight is-info is-bold">
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-vcentered">
                        <div class="column is-4 is-offset-4">
                                <h1 class="title has-text-centered">
                                    Reset Password
                                </h1>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                    <p class="control">
                                        <input class="input" name="email" type="text" placeholder="Email">
                                    </p>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong style="color:#ffaaa5;">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                <br/>
                                    <p class="control">
                                        <input class="input" name="password" type="password" placeholder="Password">
                                    </p>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong style="color:#ffaaa5;">{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                <br/>
                                    <p class="control">
                                        <input class="input" name="password_confirmation" type="password" placeholder="Password Confirmation">
                                    </p>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong style="color:#ffaaa5;">{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                    <br/>
                                    <p class="control">
                                        <button class="button is-info" id="button" type="submit">Reset Password</button>
                                    </p>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
        </section>
    </body>
</html>


