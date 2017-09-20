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
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/introjs.css">
    <link rel="stylesheet" href="css/themes/introjs-modern.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://use.fontawesome.com/e5fa0f90ea.js"></script>
</head>
<body>
<nav class="navbar" style="margin-bottom: 1.5rem;">
    <div class="navbar-brand">
        <a class="navbar-item" id="brand" href="/">
            <img src="/img/icon.png"alt="logo" width="30" height="30">
        </a>
        <form action="/newslettersignup" method="POST">
            {{csrf_field()}}
            <div class="field has-addons">
                <p class="control has-icons-left">
                    <input class="input" type="email" name="email" placeholder="Subscribe" required>
                </p>
                <button class="button is-bold is-info" type="submit" style="color:white;"><i class="fa fa-envelope fa"></i></button>
            </div>
        </form>
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
                <a href="#" class="dropdown-toggle button is-primary" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span>{{Auth::user()->name}}</span> <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu" style="text-align: center;">
                    <li>
                        <a class="common-Button" href="{{ route('logout') }}"
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
                    <a class="button common-Button" href="{{ route('register') }}">

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


{{--first slide--}}
    <section class="hero is-primary is-fullheight">
        <div class="hero-body" style="background-image: url('img/landing.png');">
            <div class="container">
                <div class="columns">
                    <div class="column is-half-desktop is-full-mobile">
                        <h1 class="title is-1">
                            Analytics on demand.
                        </h1>

                        <h1 class="subtitle is-4">
                            Stop installing boring expense tracking apps that all do </br>the exact  same things. Install one that does everything.
                        </h1>

                        <a class="button is-info is-hovered common-Button" href="/home" style="text-decoration:none;">Try it now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--desktop view for second slide--}}
    <section class="hero is-default is-bold is-hidden-mobile is-visible-desktop"  style="height:75.5vh;">
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column left-side is-half-desktop is-full-mobile second-page" style="margin-right: 3rem;">
                                <h1 class="title is-4" style="color: dimgray;">Rich Information</h1>
                                <h1 class="title is-1">Make informed decisions with historical & real time data.</h1>
                                <h1 class="title is-4">We combine immediate real time events with rich historical data to help answer the toughest questions about budgeting when and when not to spend.</h1>
                                <a class="button is-info common-Button" href="/home" style="text-decoration:none;">Check it out</a>
                        </div>
                        <div class="column right-side is-half-desktop is-hidden-touch" style="margin-left: 3rem;">
                            <img src="/img/landing_phone.png" alt="phone" width="300px" height="500px">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{--mobile view for second slide--}}
    <section class="hero is-default is-bold is-hidden-desktop is-visible mobile">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column left-side is-half-desktop is-full-mobile second-page" style="margin-right: 3rem;">
                        <h1 class="title is-4" style="color: dimgray;">Rich Information</h1>
                        <h1 class="title is-1">Make informed decisions with historical & real time data.</h1>
                        <h1 class="title is-4">We combine immediate real time events with rich historical data to help answer the toughest questions about budgeting when and when not to spend.</h1>
                        <a class="button is-info common-Button" href="/home" style="text-decoration:none;">Check it out!</a>
                    </div>
                    <div class="column right-side is-half-desktop is-hidden-touch" style="margin-left: 3rem;">
                        <img src="/img/landing_phone.png" alt="phone" width="300px" height="500px">
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--third slide--}}
    <section class="hero is-fullheight" style="background-color:#262F36;">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-half">
                        <img src="/img/chart.png" alt="chart">
                    </div>
                    <div class="column is-half third-page" style="margin-left:2rem;">
                            <h1 class="title is-4" style="color: lightblue;">
                            Easy to use
                            </h1>

                            <h1 class="title is-1" style="color: #fff;">
                                  Budget App charts your expenses with real time data.
                            </h1>
                                <h1 class="title is-4" style="color: lightblue;">
                                    Why force yourself to remember what you spent. Put it in the app for easy reference later!
                                </h1>
                             <div class="control third-page">
                                 <a class="button is-info common-Button" href="/home" style="margin-top: 1rem; text-decoration:none;">Start now</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--fourth slide--}}
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns"style="margin-bottom: 3rem;">
                    <div class="column is-half is-offset-one-quarter">
                        <h1 class="subtitle" style="color:#2767bf;">
                            Inside the Machine
                        </h1>
                        <h2 class="title">
                           It's not hard to see how we make your life easier every day.
                        </h2>
                    </div>
                </div>

                <div class="columns" style="margin-bottom: 3rem;">
                    <div class="column is-4">
                        <i class="fa fa-clock-o fa-5x" aria-hidden="true"></i>
                        <p><b style="color:#2767bf;">Time Saver.</b><em>Saving time which in result saves you more money.</em></p>
                    </div>
                    <div class="column is-4">
                        <i class="fa fa-area-chart fa-5x" aria-hidden="true"></i>
                        <p><b style="color:#2767bf;">Detailed Charting.</b><em>See when and where you are spending money.</em></p>
                    </div>
                    <div class="column is-auto">
                        <i class="fa fa-diamond fa-5x" aria-hidden="true"></i>
                        <p><b style="color:#2767bf;">User Friendly.</b><em>We made it simple, because we hate hurdles too.</em></p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-4">
                        <i class="fa fa-calculator fa-5x" aria-hidden="true"></i>
                        <p><b style="color:#2767bf;">Fast Calculations.</b><em>Create and maintain your budget without the heavy lifting.</em></p>
                    </div>
                    <div class="column is-4">
                        <i class="fa fa-lock fa-5x" aria-hidden="true"></i>
                        <p><b style="color:#2767bf;">Safe.</b><em>We strive to keep your data safe and secure.</em></p>
                    </div>
                    <div class="column is-auto">
                        <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
                        <p><b style="color:#2767bf;">Customizable.</b><em>Customize your data however you prefer, anytime you want.</em></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<footer class="footer">
    <div class="container">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <p>
                    <form action="/newslettersignup" method="POST">
                        {{csrf_field()}}
                        <div class="field has-addons" style="margin-left: 7rem;">
                            <p class="control has-icons-left">
                                <input class="input refInputField" type="email" name="email" placeholder="Email" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </p>
                            <button class="button is-info common-Button" type="submit" style="color:white;">Subscribe</button>
                         </div>
                    </form>
                 </p>
             </div>
         </div>
    </div>
    <div class="columns">
        <div class="container has-text-centered">
            <div class="column is-narrow">
                    <p class="title is-5"></p>
                    <p class="subtitle">CashFlo&copy; 2017| All Rights Reserved
                        <a class="icon" href="https://github.com/abaker4/Budget-App">
                            <i class="fa fa-github"></i>
                        </a>
                    </p>
            </div>
        </div>
    </div>
</footer>
@include('layouts.footer')