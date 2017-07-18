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



    @endsection
