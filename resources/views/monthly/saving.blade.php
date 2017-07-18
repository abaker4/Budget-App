@extends('layouts.master')

@section('content')

    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="/monthlyexpenses/store_saving" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<input type="hidden" name="type_id" value="3">--}}

                        {{--<div class="form-group{{ $errors->has('save_percent') ? ' has-error' : '' }}">--}}
                            {{--<label for="save_percent" class="col-md-4 control-label">Savings (%)</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="save_percent" type="number" class="form-control" name="save_percent" value="{{ old('save_percent') }}" required>--}}

                                {{--@if ($errors->has('save_percent'))--}}
                                    {{--<span class="help-block">--}}
                                                {{--<strong>{{ $errors->first('save_percent') }}</strong>--}}
                                            {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<a class="button is-link" href="/home"><button type="submit" class="btn btn-primary">--}}
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
                        <form method="POST" action="/monthlyexpenses/store_saving">

                            {{ csrf_field() }}
                            <input type="hidden" name="type_id" value="3">
                            <h1 class="title has-text-centered">
                                Monthly Savings (%)
                            </h1>
                            <div class="box">
                                <label class="label{{ $errors->has('save_percent') ? ' has-error' : '' }}">Savings(%)</label>
                                <p class="control">
                                    <input class="input" name="save_percent" type="text" required>
                                </p>
                                @if ($errors->has('save_percent'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('save_percent') }}</strong>
                                            </span>
                                @endif
                                <hr>
                                <p class="control">
                                    <a class="button is-link" href="/home">
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
