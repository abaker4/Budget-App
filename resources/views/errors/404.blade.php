@extends('layouts.master')


@section('content')

    <section class="hero is-large">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class=" column is-6">
                        <h1 class="title is-1">
                            <b>
                                Wow
                            </b>
                        </h1>
                        <h1 class="title is-3">
                            Such 404
                        </h1>
                        <h1 class= "title is-4">
                           We couldn't find the page you were looking for.<br/> It seems you have taken a wrong turn.
                        </h1>
                        <a class="button is-medium is-info" href="/" style="text-decoration:none; margin-top:2rem;">Go Home</a>
                    </div>
                    <div class="column is-6">
                        <h2 class="subtitle">
                            <img src="/img/404.png" width="700" height="410">
                        </h2>

                    </div>
                </div>


            </div>
        </div>
    </section>




    @endsection