@extends('layouts.master')

@section('content')
    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <form id="step5" method="POST" action="/onboard/store">

                            {{ csrf_field() }}


                            <input type="hidden" name="type_id" value="2">
                            <input type="hidden" name="monthly_category_id" value="4">
                            <h1 class="title has-text-centered">
                                Insurances
                            </h1>
                            <div class="box">
                                <div class="field">
                                    <label class="label{{ $errors->has('amount') ? ' has-error' : '' }}"></label>
                                    <p class="control">
                                        @if(!empty($insurances))
                                            <input name="id" value="{{$insurances->id }}" type="hidden">
                                            <input class="input" name="amount" value="{{$insurances->amount}}" type="text" required>
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