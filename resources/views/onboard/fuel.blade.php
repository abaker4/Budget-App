@extends('layouts.master')

@section('content')
    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <form id="step8" method="POST" action="/onboard/store">

                            {{ csrf_field() }}


                            <input type="hidden" name="type_id" value="2">
                            <input type="hidden" name="monthly_category_id" value="7">
                            <h1 class="title has-text-centered">
                                Gas/Fuel
                            </h1>
                            <div class="box">
                                <div class="field">
                                    <label class="label{{ $errors->has('amount') ? ' has-error' : '' }}"></label>
                                    <p class="control">
                                        @if(!empty($fuel))
                                            <input name="id" value="{{$fuel->id}}" type="hidden">
                                            <input class="input" name="amount" value="{{$fuel->amount}}" type="text" required>
                                        @else
                                            <input class="input" name="amount" value="" type="text" required>
                                        @endif
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