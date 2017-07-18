@extends('layouts.master')

@section('content')
    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <form id="step9" method="POST" action="/onboard/store_saving">

                            {{ csrf_field() }}

                            <h1 class="title has-text-centered">
                                Savings %
                            </h1>
                            <div class="box">
                                <div class="field">
                                    <label class="label{{ $errors->has('save_percent') ? ' has-error' : '' }}"></label>
                                    <p class="control">
                                        <input class="input" name="save_percent" type="number" placeholder="" required>
                                    </p>
                                    @if ($errors->has('save_percent'))
                                        <span class="help-block is-danger">
                                                <strong style="color:red;">{{ $errors->first('save_percent') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                @include('layouts.errors')
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection