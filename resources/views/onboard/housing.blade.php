@extends('layouts.master')

@section('content')
    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <form id="step3" method="POST" action="/onboard/store">

                            {{ csrf_field() }}


                            <input type="hidden" name="type_id" value="2">
                            <input type="hidden" name="monthly_category_id" value="2">
                            <h1 class="title has-text-centered animated fadeInDown">
                                Housing/Rent
                            </h1>
                            <div class="box">
                                <div class="field">
                                    <label class="label is-large{{ $errors->has('amount') ? ' has-error' : '' }}">Amount</label>
                                    <div class="control has-icons-left">
                                        <p class="control animated fadeInRight">
                                            @if(!empty($housing))
                                                <input name="id" value="{{$housing->id }}" type="hidden">
                                                <input class="input" name="amount" value="{{$housing->amount}}" type="text" required>
                                            @else
                                                <input class="input" name="amount" value="" type="text" required>
                                            @endif
                                        </p>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-usd"></i>
                                        </span>
                                        @if ($errors->has('amount'))
                                            <span class="help-block is-danger">
                                                 <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                        @endif
                                    </div>
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