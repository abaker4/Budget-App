@extends('layouts.master')

@section('content')

                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

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
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}



                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}



                    <section class="hero is-fullheight is-dark is-bold">
                        <div class="hero-body">
                            <div class="container">
                                <div class="columns is-vcentered">
                                    <div class="column is-4 is-offset-4">
                                        <form method="POST" action="{{ route('register') }}">

                                            {{ csrf_field() }}

                                            <h1 class="title has-text-centered">
                                                Register an Account
                                            </h1>
                                            <div class="box">
                                                <label class="label{{ $errors->has('name') ? ' has-error' : '' }}">Name</label>
                                                <p class="control">
                                                    <input class="input" type="text" name="name" placeholder="" required>
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                             <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </p>
                                                <label class="label"{{ $errors->has('email') ? ' has-error' : '' }}>Email</label>
                                                <p class="control">
                                                    <input class="input" type="email" name="email" placeholder="" required>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                             <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </p>
                                                <hr>
                                                <label class="label{{ $errors->has('password') ? ' has-error' : '' }}">Password</label>
                                                <p class="control">
                                                    <input class="input" type="password" name="password" placeholder="" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                         </span>
                                                    @endif
                                                </p>
                                                <label class="label" for="password-confirm">Confirm Password</label>
                                                <p class="control">
                                                    <input class="input" id="password-confirm" type="password" for="password-confirm" name="password_confirmation" placeholder="" required>
                                                </p>
                                                <hr>
                                                <p class="control">
                                                    <button type="submit" class="button is-primary">Register</button>
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
