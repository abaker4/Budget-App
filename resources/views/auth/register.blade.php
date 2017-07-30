@extends('layouts.master')

@section('content')

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
                                                <label class="label{{ $errors->has('name') ? ' has-error' : '' }}">*Name</label>
                                                <p class="control">
                                                    <input class="input" type="text" name="name" placeholder="Full Name" required>
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                             <strong style="color:red;">{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </p>
                                                <label class="label"{{ $errors->has('email') ? ' has-error' : '' }}>*Email</label>
                                                <p class="control">
                                                    <input class="input" type="email" name="email" placeholder="example@example.com" required>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                             <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </p>
                                                <hr>
                                                <label class="label{{ $errors->has('password') ? ' has-error' : '' }}">*Password</label>
                                                <p class="control">
                                                    <input class="input" type="password" name="password" placeholder="" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong style="color:red;">{{ $errors->first('password') }}</strong>
                                                         </span>
                                                    @endif
                                                </p>
                                                <label class="label" for="password-confirm">*Confirm Password</label>
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
