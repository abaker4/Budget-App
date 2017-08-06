@extends('layouts.master')

@section('content')
    <section class="hero is-fullheight is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <form method="POST" action="/onboard/store_saving">

                            {{ csrf_field() }}

                            <input type="hidden" name="type_id" value="1">
                            <input type="hidden" name="monthly_category_id" value="3">
                            <h1 class="title has-text-centered">
                                Monthly Savings
                            </h1>
                            <div class="box">
                                <div class="field">
                                    <label class="label is-large" {{ $errors->has('save_percent') ? ' has-error' : '' }}>Amount</label>
                                    <div class="control has-icons-left">
                                        <p class="control">
                                            @if(!empty($savings))
                                                <input name="id" value="{{$savings->id }}" type="hidden">
                                                <input class="input" name="save_percent" value="{{($savings->save_percent)*100}}" type="text" required>
                                            @else
                                                <input class="input" name="save_percent" value="" type="text" required>
                                            @endif
                                        </p>
                                        <span class="icon is-small is-left">
                                             <i class="fa fa-percent"></i>
                                        </span>
                                        @if ($errors->has('save_percent'))
                                            <span class="help-block is-danger">
                                                <strong>{{ $errors->first('save_percent') }}</strong>
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