@extends('layouts.master')

@section('content')
    <div class="columns">
        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading">
                    Weekly Activity
                </p>
                <canvas id="myChart" style="height: 280px;"></canvas>
                {{--<div id="canvas-holder">--}}
                    {{--<canvas id="chart-area" style="height: 280px;"></canvas>--}}
                {{--</div>--}}
                {{--<button id="randomizeData">Randomize Data</button>--}}
                {{--<button id="addDataset">Add Dataset</button>--}}
                {{--<button id="removeDataset">Remove Dataset</button>--}}
                {{--<button id="addData">Add Data</button>--}}
                {{--<button id="removeData">Remove Data</button>--}}
            </section>
        </div>

        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading">
                    Recent Spending History
                <p>


                <h1 class="title is-1"></h1>
            </section>
        </div>
    </div>


    <div class="columns">
            <div class="column is-6">
                <section class="panel">
                    <p class="panel-heading">
                        Monthly Expense Summary
                    </p>
                   {{--Need to filter to where the type_id = 2--}}
                    @foreach($monthly_expenses as $monthly)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        @foreach($daily_category as $daily)
                        <tbody>
                            <tr>
                                <td>{{$monthly->monthly_category_id}}| {{$daily->}}</td>

                                <td>{{$monthly->amount}}</td>
                            </tr>
                        </tbody>
                    </table>
                        @endforeach
                @endforeach
                </section>
            </div>

            <div class="column is-6">
                <section class="panel">
                    <p class="panel-heading">
                        Current Weekly Total
                    </p>

                    <h1 class="title is-1">{{$weekly_amount}}</h1>

                   @include('layouts.form')
                </section>
            </div>
    </div>

    @endsection

