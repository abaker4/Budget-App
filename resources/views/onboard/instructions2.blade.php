@extends('layouts.master')

@section('content')


    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-half is-offset-one-quarter">
                        <div id="step1" class="card">
                            <div class="card-content">
                                <p class="title animated fadeInRight" style="color:black;">Take a minute and answer a few questions for us</p>
                            </div>
                            <footer class="card-footer">
                                <p class="card-footer-item">
                                      <span>
                                          <a class="button is-link is-large is-info animated fadeInDown" href="/home" style="text-decoration: none;">Get Started</a>
                                      </span>
                                </p>
                            </footer>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
