@extends('layouts.master')


@section('content')
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="/monthlyexpenses/store_income" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<input type="hidden" name="type_id" value="1">--}}

                        {{--<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">--}}
                            {{--<label for="amount" class="col-md-4 control-label">Amount</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="amount" type="number" class="form-control" name="amount" value="{{ old('amount') }}" required>--}}

                                {{--@if ($errors->has('amount'))--}}
                                    {{--<span class="help-block">--}}
                                                {{--<strong>{{ $errors->first('amount') }}</strong>--}}
                                            {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<a class="button is-link" href="/monthlyexpenses/create_saving"><button type="submit" class="btn btn-primary">--}}
                                    {{--Submit--}}
                                {{--</button></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <form method="POST" action="/monthlyexpenses/store_income">

                            {{ csrf_field() }}

                            <input type="hidden" name="type_id" value="1">
                            <h1 class="title has-text-centered">
                                Monthly Income
                            </h1>
                            <div class="box">
                                <label class="label {{ $errors->has('amount') ? ' has-error' : '' }}">Amount</label>
                                <p class="control">
                                    <input class="input" name="amount" type="text">
                                </p>
                                @if ($errors->has('amount'))
                                    <span class="help-block is-danger">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                @endif
                                <hr>
                                <p class="control">
                                    <a class="button is-link" href="/monthlyexpenses/create_saving">
                                        <button class="button is-primary" type="submit">Submit</button>
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @endsection
