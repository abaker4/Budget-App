@extends('layouts.master')

@section('content')

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

                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                <div class="box">
                                    <label for="email" {{ $errors->has('email') ? ' has-error' : '' }}class="label has-text-centered">E-Mail Address</label>
                                        <p class="control">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                        </p>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                    <p class="control">
                                        <button type="submit" class="button is-info" style="margin-left: 4rem;">
                                            Send Password Reset Link
                                        </button>
                                    </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
