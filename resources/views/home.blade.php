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
            <section>
                    <form method="POST" action="/daily_total">
                        {{csrf_field()}}
                        <div class="title is-4 has-text-centered field has-addons is-visible-desktop is-hidden-mobile">
                            <p class="control">
                                 <span class="select">
                                   <select name="daily_category_id">
                                       <option value="1">Restaurants</option>
                                       <option value="2">Alcohol/Bars</option>
                                       <option value="3">Coffee Shops</option>
                                       <option value="4">Clothing</option>
                                       <option value="5">Fast Food</option>
                                       <option value="6">Groceries</option>
                                       <option value="7">Gas/Fuel</option>
                                  </select>
                                </span>
                            </p>
                            <p class="control is-expanded">
                                <input  class="input"  name="amount" type="text" placeholder="$ Amount">
                            </p>
                            <p class="control">
                                <button class="button" type="submit">
                                    Submit
                                </button>
                            </p>
                        </div>
                    </form>

                    <div class="has-text-centered" style="margin-left: 14rem; margin-bottom: 4rem;">
                         @include('layouts.form')
                    </div>

             </section>
        </div>
        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                   Daily Expense
                </p>
                <canvas id="myChart" style="height: 500px;"></canvas>
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
                        @foreach($daily_title as $daily)
                                <tbody>
                                    <tr>
                                        <td>{{$daily->title}}</td>
                                        <td>${{$daily->amount}}</td>
                                        <td>{{$daily->created_at->diffForHumans()}}</td>

                                        @endforeach
                                    </tr>
                                </tbody>
                        </table>  
                </section>
            </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>
    var theData = {!! $daily_title->toJson() !!};

    $(function () {

        var chartData = {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                        label: [],
                        data: [],

                         backgroundColor: [


                         ],

                         borderColor: [

                          ],
                          borderWidth: 1
                }]
            }
        };


    $.each(theData, function (index, data) {

    var theData = {
    type:'line',
    data: {
        labels: [data.created_at],
        datasets: [{

                label: [data.title],

                backgroundColor: [


                 ],

                 borderColor: [

                 ],

                 borderWidth: 1,

                 data: [data.amount]

            }]
        }

    };

    chartData.data.labels.push(theData.data.labels);
    chartData.data.datasets.forEach(function(dataset){
    dataset.label.push(theData.data.datasets[0].label[0]);
    dataset.data.push(theData.data.datasets[0].data[0]);
    });
    });



    var chartOptions = {
        options: {
            responsive: true,
                title:
                {
                    display: true,
                        text: 'Weekly Expense Line Chart'
                            },

                            tooltips: {
                                mode: 'index',
                                    intersect: false
                                    },
                                        hover: {
                                            mode: 'nearest',
                                                intersect: true
                                                    },
                                                    scales: {
                                                        xAxes: [{
                                                         display: true,
                                                        scaleLabel: {
                                                 display: true,
                                             labelString: 'Transaction'
                                        }
                                    }],
                                    yAxes:
                                [{
                                display: true,
                            scaleLabel: {
                        display: true,
                    labelString: '$ Amount'
                    }
                    }]
                }
            }
        };



        var ctx = document.getElementById("myChart").getContext("2d");
        var myChart = new Chart(ctx,chartData,chartOptions);

    });



    </script>
    @endsection


