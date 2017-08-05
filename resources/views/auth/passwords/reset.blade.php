@extends('layouts.master')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Reset Password</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<input type="hidden" name="token" value="{{ $token }}">--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>--}}

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

                        {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}

                                {{--@if ($errors->has('password_confirmation'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Reset Password--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<section class="hero is-fullheight is-dark is-bold">
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
                            <label class="label"{{ $errors->has('password_confirmation') ? ' has-error' : '' }}>Confirm Password</label>
                            <p class="control">
                                <input class="input" name="password_confirmation" type="password">
                            </p>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong style="color:red;">{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                            <hr>
                            <p class="control">
                                <button class="button is-info" type="submit">Reset Password</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
