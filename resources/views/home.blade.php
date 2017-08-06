@extends('layouts.master')

@section('content')

    <div class ="columns">
        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                    Weekly Activity
                </p>
                <h1 class="title is-1 has-text-centered" style="font-weight: bolder; margin-top: 7rem;">
                    ${{$weekly_amount}}</h1>

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

                        <p class="control is-expanded">
                            <input class="input" {{ $errors->has('amount') ? ' has-error' : '' }} name="amount"
                                   type="text" placeholder="$ Amount">
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

        <div class="column is-6 is-hidden-desktop is-visible-mobile">
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



    <div class="columns">
        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                    Monthly Expense Summary
                </p>

                <table class="table is-striped">
                    <thead>
                    <tr>
                        <th>Category</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    @foreach($monthly_expenses as $monthly)
                        <tbody>
                        <tr class="has-text-centered">
                            <td>{{$monthly->title}}</td>
                            <td>{{$monthly->amount}}</td>
                            <td><a class="btn btn-link" href="/onboard/{{strtolower($monthly->title)}}">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                            </td>
                            @endforeach
                        </tr>
                        </tbody>
                </table>
                <p class="panel-heading has-text-centered">
                    Monthly Saving %
                </p>
                <table class="table is-bordered">
                    <thead></thead>
                    <tbody>
                    @foreach($save_percent as $percent)
                        <tr>
                            <td class="has-text-centered">Savings Percentage</td>
                            <td class="has-text-centered">{{($percent->save_percent)*100}}%</td>
                            <td>
                                <a class="btn btn-link" href="/onboard/savings">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>

            </section>
        </div>
        <div class="column is-6 is-visible-desktop is-hidden-mobile">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                    Recent Spending History
                <p>
                <table class="table is-striped">
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

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script>
        var theData = {!! $expense_chart_data !!};
        var chartData = {
            type: 'line',
            data: {
                labels: [],
                datasets: []
            }
        };

        $(function () {

            var totalsTracker = [];
            // Create labels array with each day in the week
            for (var i = 6; i >= 0; i = i-1) {
                var theDay = moment().subtract(i, 'day').format('MM-DD-YYYY');
                chartData.data.labels.push(theDay);
                totalsTracker[theDay] = 0;
            }

            // Create Chart.js data object
            var totalColor = getColor();
            var totalLineData = {
                label: 'Totals Line',
                backgroundColor: totalColor,
                borderColor: totalColor,
                borderWidth: 5,
                fill: false,
                data: []
            };
            $.each(theData, function (index, category) {

                var theColor = getColor();

                // Create Chart.js data object
                var theData = {
                    label: index,
                    backgroundColor: theColor,
                    borderColor: theColor,
                    borderWidth: 1,
                    fill: false,
                    data: []
                };

                // Loop through each day and check for expenses ont hat day
                $.each(chartData.data.labels, function (index, day) {
                    var hasExpense = false;
                    $.each(category, function (index, dailyExpense) {

                        // If has expense on that day add the sum of the expenses to the chart
                        if (dailyExpense.theDay === day) {
                            totalsTracker[day] += parseFloat(dailyExpense.sum);
                            theData.data.push(dailyExpense.sum);
                            hasExpense = true;
                        }
                    });

                    // If no expense add a 0 value to the chart data
                    if (!hasExpense) {
                        theData.data.push(0);
                    }

                });

                chartData.data.datasets.push(theData);
            });


            $.each(Object.keys(totalsTracker), function(key, value) {
                totalLineData.data.push(totalsTracker[value]);
            });
            chartData.data.datasets.push(totalLineData);

            var chartOptions = {
                options: {
                    responsive: true,
                    title: {
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
                        yAxes: [{
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
            var myChart = new Chart(ctx, chartData, chartOptions);

        });

        var currentColorKey = 0;
        function getColor() {
            var colors = [
                '#F44336', // red
                '#03A9F4', // light blue
                '#4CAF50', // green
                '#3F51B5', // blue
                '#FF5722', // orange
                '#FFEB3B', // yellow
                '#9E9E9E', // grey
                '#795548', // brown
                '#9C27B0', // purple
                '#E91E63', // pink
            ];

            // add 1 each time function is called so no duplicate colors
            currentColorKey++;

            return colors[currentColorKey];
        }
    </script>
@endsection


