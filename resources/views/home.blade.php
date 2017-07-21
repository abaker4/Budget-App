@extends('layouts.master')

@section('content')

    <div class="columns">
        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                    Daily Expense
                </p>
                <h1 class="title is-1 has-text-centered" style="font-weight: bolder; margin-top: 7rem;">${{$weekly_amount}}</h1>

            </section>
            @include('layouts.form')
        </div>

        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                    Weekly Activity
                </p>
                <canvas id="myChart" style="height: 280px;"></canvas>
            </section>
        </div>


    </div>


    <div class="columns">
            <div class="column is-6">
                <section class="panel">
                    <p class="panel-heading has-text-centered">
                        Monthly Expense Summary
                    </p>
                    @foreach($monthly_expenses as $monthly)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{$monthly->monthly_category_id}}</td>
                                <td>{{$monthly->amount}}</td>
                                <td><a class="btn btn-link" href="/onboard/{{$monthly->monthly_category_id}}">
                                        <button type="button" class="btn btn-primary">Edit</button></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                        @endforeach
                </section>
            </div>
            <div class="column is-6">
                <section class="panel">
                    <p class="panel-heading has-text-centered">
                        Recent Spending History
                    <p>


                    <h1 class="title is-1"></h1>
                </section>
            </div>

    </div>

    @endsection

<script>

</script>

