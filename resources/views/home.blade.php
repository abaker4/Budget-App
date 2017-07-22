@extends('layouts.master')

@section('content')

    <div class="columns">
        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                   Weekly Activity
                </p>
                <h1 class="title is-1 has-text-centered" style="font-weight: bolder; margin-top: 7rem;">${{$weekly_amount}}</h1>

            </section>
            @include('layouts.form')
        </div>

        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                   Daily Expense
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

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        @foreach($monthly_expenses as $monthly)
                        <tbody>
                            <tr>
                                <td>{{$monthly->title}}</td>
                                <td>{{$monthly->amount}}</td>
                                <td><a class="btn btn-link" href="/onboard/{{strtolower($monthly->title)}}">
                                        <button type="button" class="btn btn-primary">Edit</button></a>
                                </td>
                                @endforeach

                            </tr>
                        </tbody>
                    </table>

                </section>
            </div>
            <div class="column is-6">
                <section class="panel">
                    <p class="panel-heading has-text-centered">
                        Recent Spending History
                    <p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                        @foreach($daily_expenses as $daily)
                                <tbody>
                                    <tr>
                                        <td>{{$daily->title}}</td>
                                        <td>${{$daily->amount}}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                        </table>

                    <h1 class="title is-1"></h1>
                </section>
            </div>

    </div>

    @endsection



