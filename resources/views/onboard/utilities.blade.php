@extends('layouts.master')

@section('content')
    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <form id="step4" method="POST" action="/onboard/store">

                            {{ csrf_field() }}


                            <input type="hidden" name="type_id" value="2">
                            <input type="hidden" name="monthly_category_id" value="3">
                            <h1 class="title has-text-centered">
                               Utilities
                            </h1>
                            <div class="box">
                                <div class="field">
                                    <label class="label{{ $errors->has('amount') ? ' has-error' : '' }}"></label>
                                    <p class="control">
                                        <input class="input" name="amount" type="text" value="" placeholder="Amount" required>
                                    </p>
                                    @if ($errors->has('amount'))
                                        <span class="help-block is-danger">
                                            <strong>{{ $errors->first('amount') }}</strong>
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