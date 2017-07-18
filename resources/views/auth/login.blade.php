@extends('layouts.master')

@section('content')

                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}


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
                                                <label class="label">Email</label>
                                                <p class="control">
                                                    <input class="input" name="email" type="text">
                                                </p>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                <hr>
                                                <label class="label">Password</label>
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
                                                    <button class="button is-primary" type="submit">Login</button>
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
