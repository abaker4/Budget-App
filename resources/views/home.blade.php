<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/introjs.css">
    <link rel="stylesheet" href="css/themes/introjs-modern.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://use.fontawesome.com/e5fa0f90ea.js"></script>

</head>
    <style>

        .common-Button {
            white-space: nowrap;
            display: inline-block;
            height: 40px;
            line-height: 40px;
            box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
            background: #fff;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .025em;
            text-decoration: none;
            transition: all .15s ease;
        }

    </style>

<body>
    {{--Nav Start--}}

    <nav class="navbar" style="margin-bottom: 1.5rem;">
        <div class="navbar-brand">
            <a class="navbar-item common-Button" id="brand" href="/" >
                <img src="/img/icon.png"alt="logo" width="30" height="30" data-step="1" data-intro="Welcome to Cash Flo where managing money couldn't be easier. Feel free to hit next and take a tour of the dashboard or hit skip to exit." data-position='left'>
            </a>
            <a id="flyover" class="navbar-item" href="/home?tour=1">
                <i class="fa fa-paper-plane common-Button" aria-hidden="true" data-step="9" data-intro="If you ever need to revisit the flyover instructions, just click here."></i>
            </a>
        </div>
        <div class="navbar-burger burger" data-target="toggleTarget">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="nav-menu nav-right" id="toggleTarget">
            <a class="navbar-item has-text-centered common-Button" href="/">
                Home
            </a>
            @if (Auth::guest())
                <a class="navbar-item has-text-centered common-Button" href="/login">
                    Log In
                </a>
                <a class="navbar-item has-text-centered common-Button" href="/register">
                    Register
                </a>
            @else
                <div class="dropdown" style="margin-bottom: 1rem;">
                    <a href="#" class="dropdown-toggle button is-primary common-Button" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span>{{Auth::user()->name}}</span> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu" style="text-align: center;">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form"  action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            @endif
        </div>

        <div class="navbar-end">
            <div class="navbar-item is-hidden-mobile">
                <div class="field is-grouped">
                    <p class="control">
                        @if (Auth::guest())
                            <a class="button common-Button" href="{{ route('login') }}" style="background-color:#0275d8; color:white;">

                                <span>Login</span>
                            </a>
                    </p>
                    <p class="control">
                        <a class="button common-Button" href="{{ route('register') }}">

                            <span>Register</span>
                        </a>
                    </p>
                        @else
                        <div class="dropdown" style="margin-bottom: 2rem;">
                            <a href="#" class="dropdown-toggle button common-Button" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span>{{Auth::user()->name}}</span> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="text-align: center;">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

{{--Nav End--}}
<div class="container">
    <div class ="columns">
        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                    Weekly Total
                </p>
                <h1 class="title is-1 has-text-centered"  style="font-weight: bolder; margin-top: 7rem;">
                  <span data-step="2" data-position="right" data-intro="This is your pro-rated weekly budgeted amount
                   based off your static monthly expenses. Every Sunday your weekly total renews, rolling over any amount
                   you had left over from the previous week.">${{$weekly_amount}}</span>
                </h1>
            </section>
            <section>
                <form method="POST" action="/daily_total">
                    {{csrf_field()}}
                    <div class="title is-4 has-text-centered field has-addons is-visible-desktop is-hidden-mobile"
                         data-step="3" data-position="right" data-intro=" This is your Daily Expense. Any time you want to make a purchase during the week you can log it here with type and amount">
                        <p class="control">
                                 <span  class="select">
                                   <select id="inputField" class="common-Button" name="daily_category_id">
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
                            <input id="inputField" class="input" name="amount" type="text" placeholder="$ Amount" required>
                        </p>
                        <p class="control">
                            <button class=" button is-info common-Button" type="submit">
                                Submit
                            </button>
                        </p>
                    </div>
                </form>
                <div class="has-text-centered" style="margin-left: 9rem; margin-bottom: 4rem;">
                    @include('layouts.form')
                </div>
            </section>
            <div style="clear:both;"></div>
        </div>




        <div class="column is-6"
             data-step="4" data-intro="The Detailed Chart View shows you where you're spending money each day along
             with a running daily total.">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                    Daily Expense
                </p>
                <canvas id="myChart" style="height: 500px;"></canvas>
            </section>
        </div>
    </div>
</div>
    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <section class="panel">
                    <p class="panel-heading has-text-centered">
                      Monthly Expense Summary
                    </p>

                    <table class="table is-bordered"
                       data-step="5" data-intro="Your Monthly Expense Summary easily allows you to edit any static
                       expenses you may have, so you can be accurate as possible with your budget.">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                    </thead>
                            @foreach($monthly_expenses as $monthly)
                        <tbody>
                        <tr class="has-text-centered">
                            <td>{{$monthly->title}}</td>
                            <td>{{$monthly->amount}}</td>
                            <td><a class="button is-info common-Button" href="/onboard/{{strtolower($monthly->title)}}">
                                    Edit
                                </a>
                            </td>
                            @endforeach
                        </tr>
                        </tbody>
                </table>
                <p class="panel-heading has-text-centered">
                    Monthly Saving %
                </p>
                <table class="table is-bordered"
                       data-step="6" data-intro="You also can manage how much you want to save each month, with increasing or decreasing the percentage based off of your preference.">
                    <thead></thead>
                    <tbody>
                    @foreach($save_percent as $percent)
                        <tr>
                            <td class="has-text-centered">Savings Percentage</td>
                            <td class="has-text-centered">{{($percent->save_percent)*100}}%</td>
                            <td>
                                <a class="button is-info common-Button" href="/onboard/savings_percentage">
                                   Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <p class="panel-heading has-text-centered">
                    Weekly Budget Start Date
                </p>

                <form method="POST" action="/reference_date">
                    {{csrf_field()}}
                    <div class="field has-addons" style="margin-top:1rem; margin-left: 12rem;">
                        <p class="control">
                            <input class="input is-info refInputField" value="" name="reference_date" type="text"
                                   id="datepicker" placeholder="Date:" data-step="7" data-intro="You made a big purchase
                                   at the beginning of the week? No problem! You can easily reset weekly budget start
                                   date here!" required>
                        </p>
                        <p class="control">
                            <button class="button is-info common-Button" type="submit">Submit</button>
                        </p>
                    </div>
                    @if ($errors->has('reference_date'))
                        <span class="help-block">
                            <strong style="color:red;">{{ $errors->first('reference_date') }}</strong>
                        </span>
                    @endif
                </form>
            </section>
        </div>

        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                    Recent Spending History
                <p>
                <table class="table is-striped"
                       data-step="8" data-intro="Recent Spending History tracks all of your purchases in a detailed
                       view within the last week and also helps you track spending patterns">
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

</div>
        <div class="columns">
            <div class="container has-text-centered">
                <div class="column is-narrow">
                    <div class="box">
                        <p class="title is-5"></p>
                        <p class="subtitle">CashFlo&copy; 2017 | All Rights Reserved
                            <a class="icon" href="https://github.com/abaker4/Budget-App">
                                <i class="fa fa-github"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

{{--flyover tour--}}
    @if ($tour)
        <script src="js/intro.js"></script>
        <script language='javascript' type='text/javascript'>

            introJs().start();

            introJs.fn.oncomplete(function() {
                window.location.href='/home';
            });

            introJs.fn.onexit(function(){
                window.location.href='/home';
            });
        </script>
    @endif


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script
            src="http://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <scripot src="js/intro.js"></scripot>
    <script src="/js/sweetalert-dev.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/intro.js"></script>

    @include('flash')

    <script>
        //Activates Hamburger Menu on Navbar
        document.addEventListener('DOMContentLoaded', function () {

            // Get all "navbar-burger" elements
            var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any nav burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(function ($el) {
                    $el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        var target = $el.dataset.target;
                    var $target = document.getElementById(target);

                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                    });

                });
            }

        });
    </script>
    <script>
        $(function(){

// provides the functionality of the keypad on  monthly expenses on the dashboard

            $('#one_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#two_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#three_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#four_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#five_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#six_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#seven_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#eight_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#nine_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#zero_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#period_picker').on('click', function(){
                var self = this;
                var currentValue = $('#numInput').val() + $(self).data('value');
                $('#numInput').val(currentValue);
            });

            $('#delete').on('click', function(){
                var currentValue = $('#numInput').val();
                var shortenedString = currentValue.substr(0,(currentValue.length -1));
                $('#numInput').val(shortenedString);
                return false;
            });

            //calender date picker on dashboard
            $( "#datepicker" ).datepicker();

            //validation flash messaging

            $('#errors').fadeOut(3000);


        });


        //Chart Js

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

                // Loop through each day and check for expenses on that day
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
    </body>
</html>

