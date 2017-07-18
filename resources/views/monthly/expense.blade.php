@extends('layouts.master')

@section('content')
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<form class="form-horizontal" method="POST" action="/monthlyexpenses/store_expense" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<input type="hidden" name="type_id" value="2">--}}

                        {{--<div class="form-group{{ $errors->has('monthly_category') ? ' has-error' : '' }}">--}}
                            {{--<label for="monthly_category" class="col-md-4 control label">Category</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<select id="monthly_category" name="monthly_category" class="form-control">--}}

                                    {{--@foreach(App\Http\Utilities\categories::allMonthly() as $category)--}}
                                        {{--<option value="{{$category}}">{{$category}}</option>--}}
                                    {{--@endforeach--}}

                                {{--</select>--}}

                                {{--@if ($errors->has('monthly_category'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('monthly-category') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}

                            {{--</div>--}}
                        {{--</div>--}}

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
                               {{--<a class="button is-link" href="/monthlyexpenses/create_income"><button type="submit" class="btn btn-primary">--}}
                                    {{--Submit--}}
                                {{--</button></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}

    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <form method="POST" action="/monthlyexpenses/store_expense">

                            {{ csrf_field() }}


                            <input type="hidden" name="type_id" value="2">
                            <h1 class="title has-text-centered">
                                Monthly Expenses
                            </h1>
                            <div class="box">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="select is-fullwidth {{ $errors->has('monthly_category') ? ' has-error' : '' }}">
                                            <select name="monthly_category">
                                                @foreach(App\Http\Utilities\categories::allMonthly() as $category)
                                                <option value="{{$category}}">{{$category}}</option >
                                                @endforeach
                                            </select>
                                            @if ($errors->has('monthly_category'))
                                                <span class="help-block is-danger">
                                                      <strong>{{ $errors->first('monthly-category') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <label class="label{{ $errors->has('amount') ? ' has-error' : '' }}"></label>
                                    <p class="control">
                                        <input class="input" name="amount" type="text" placeholder="Amount" required>
                                    </p>
                                    @if ($errors->has('amount'))
                                        <span class="help-block is-danger">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <a class="button is-link" href="/monthlyexpenses/create_income">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </a>
                                @include('layouts.errors')
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
<script>


</script>

@endsection
