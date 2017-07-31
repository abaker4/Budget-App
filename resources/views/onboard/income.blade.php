@extends('layouts.master')

@section('content')

    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <form id="step2" method="POST" action="/onboard/store">

                            {{ csrf_field() }}

                            <input type="hidden" name="type_id" value="1">
                            <input type="hidden" name="monthly_category_id" value="1">
                            <h1 class="title has-text-centered">
                                Monthly Income
                            </h1>
                            <div class="box">
                                <label class="label {{ $errors->has('amount') ? ' has-error' : '' }}">Amount</label>
                                <p class="control">
                                    @if(!empty($income))
                                        <input name="id" value="{{$income->id }}" type="hidden">
                                        <input class="input" name="amount" value="{{$income->amount}}" type="text" required>
                                    @else
                                        <input class="input" name="amount" value="" type="text" required>
                                    @endif
                                </p>
                                @if ($errors->has('amount'))
                                    <span class="help-block is-danger">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                                <hr>
                                <p class="control">
                                    <button class="button is-primary" type="submit">Submit</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>



@endsection