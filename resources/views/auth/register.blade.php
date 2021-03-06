
<!DOCTYPE html>
<html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Cashflo</title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.css">
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link href="https://fonts.googleapis.com/css?family=Work+Sans:100" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
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
                    margin-left: 8rem;

                }

                .refInputField{
                    height:40px;
                }

                a, a:hover{
                    text-decoration: none;
                }

                #brand:hover{
                    background-color: #fff;
                !important;
                }

                .labelField{

                    font-family: 'Work Sans', sans-serif;
                    font-size: 34px;
                    font-weight: 200;
                    line-height: 2;

                }

                .common-Button {
                    white-space: nowrap;
                    display: inline-block;
                    height: 40px;
                    line-height: 40px;
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
                .spacing{

                    margin-bottom: 10px;
                }

            </style>
        </head>
        <body>
        {{--Nav Start--}}
        <nav class="navbar" style="margin-bottom: 1.5rem;">
            <div class="navbar-brand">
                <a class="navbar-item" id="brand" href="/">
                    <img src="/img/icon.png"alt="logo" width="30" height="30" data-step="1" data-position='left' data-intro="Welcome to the Budget App where managing money couldn't be easier. Feel free to hit next and take a tour of the dashboard or hit skip to exit.">
                </a>
            </div>
            <div class="navbar-burger burger" data-target="toggleTarget">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav-menu nav-right" id="toggleTarget">
                <a class="navbar-item has-text-centered common-Button" href="/">
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
                                <a class= href="{{ route('logout') }} common-Button"
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
                            <a class="button common-Button" href="{{ route('login') }}" style="background-color:#0275d8; color:white;">
                                <span>Login</span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-transparent common-Button" href="{{ route('register') }}">
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
     {{--Nav End--}}
        <section class="hero is-fullheight is-info is-bold">
                <div class="hero-body">
                    <div class="container">
                        <div class="columns is-vcentered">
                            <div class="column is-4 is-offset-4">
                                <form method="POST" action="{{ route('register') }}">

                                    {{ csrf_field() }}

                                    <h1 class="title has-text-centered labelField spacing">
                                        Register
                                    </h1>
                                        <p class="control spacing">
                                            <input class="input field" type="text" name="name" placeholder="Full Name">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                     <strong style="color:#ffaaa5;">{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </p>
                                        <p class="control spacing">
                                            <input class="input field" type="email" name="email" placeholder="Email">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                     <strong style="color:#ffaaa5;">{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </p>
                                        <p class="control spacing">
                                            <input class="input field" type="password" name="password" placeholder="Password">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong style="color:#ffaaa5;">{{ $errors->first('password') }}</strong>
                                                 </span>
                                            @endif
                                        </p>
                                        <p class="control spacing">
                                            <input class="input field" id="password-confirm" type="password" for="password-confirm" name="password_confirmation" placeholder="Password Confirmation">
                                        </p>
                                        <p class="control">
                                            <button type="submit" id="button" class="button is-info common-Button">Register</button>
                                        </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <script>
        //Activates Hamburger Menu on Navbar
        document.addEventListener('DOMContentLoaded', function () {

            // Get all "navbar-burger" elements
            var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any nav burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(function ($el) {
                    $el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        var target = $el.dataset.target;
                    var $target = document.getElementById(target);

                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });

                });
            }

        });
        </script>
    </body>
</html>