@extends('layouts.master')


@section('content')
    <section class="hero is-primary is-fullheight">
        <div class="hero-body" style="background-image: url('img/landing.png');">
            <div class="container">
                <div class="columns">
                    <div class="column is-half-desktop is-full-mobile homepage">
                        <h1 class="title is-1">
                            Analytics on demand.
                        </h1>

                        <h2 class="subtitle is-4">
                            Stop installing boring expense tracking apps that all do </br>the exact  same things. Install one that does everything.
                        </h2>

                        <a class="button is-info is-hovered" href="/home" style="text-decoration:none;">Try it now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero is-default is-bold" style="height: 75.5vh;">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column left-side is-half-desktop is-full-mobile second-page" style="margin-right: 3rem;">
                            <h1 class="title is-4" style="color: dimgray;">Rich Information</h1>
                            <h1 class="title is-1">Make informed decisions with historical & real time data.</h1>
                            <h1 class="title is-4">We combine immediate real time events with rich historical data to help answer the toughest questions about budgeting when and when not to spend.</h1>
                            <a class="button is-info" href="/home" style="text-decoration:none;">Check it out!</a>
                    </div>
                    <div class="column right-side is-half-desktop is-hidden-touch" style="margin-left: 3rem;">
                        <img src="/img/landing_phone.png" alt="phone" width="300px" height="500px">
                    </div>
                </div>
            </div>
        </div>
    </section>

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

                            <h2 class="title is-3" style="color: #fff;">
                                  Budget App charts your expenses with real time data.
                            </h2>
                                <p style="color: lightblue;">
                                    Why force yourself to remember what you spent. Put it in the app for easy reference later!
                                </p>
                             <div class="control third-page">
                                 <a class="button is-info is-hovered" href="/home" style="margin-top: 1rem; text-decoration:none;">Start now</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    @endsection









