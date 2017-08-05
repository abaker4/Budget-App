@extends('layouts.master')

@section('content')

                    <section class="hero is-fullheight is-dark is-bold">
                        <div class="hero-body">
                            <div class="container">
                                <div class="columns is-vcentered">
                                    <div class="column is-4 is-offset-4">
                                        <form method="POST" action="{{ route('login') }}">

                                            {{ csrf_field() }}

                                            <h1 class="title has-text-centered">
                                               Login
                                            </h1>
                                            <div class="box">
                                                <label class="label"{{ $errors->has('email') ? ' has-error' : '' }}>Email</label>
                                                <p class="control">
                                                    <input class="input" name="email" type="text">
                                                </p>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                <hr>
                                                <label class="label"{{ $errors->has('password') ? ' has-error' : '' }}>Password</label>
                                                <p class="control">
                                                    <input class="input" name="password" type="password">
                                                </p>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong style="color:red;">{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                                <hr>
                                                <p class="control">
                                                    <button class="button is-info" type="submit">Login</button>
                                                </p>
                                            </div>
                                            <div class="field">
                                                <p class="control">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        Remember Me
                                                    </label>
                                                </p>
                                            </div>
                                            <p class="has-text-centered">
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Forgot Your Password?
                                                </a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
@endsection
