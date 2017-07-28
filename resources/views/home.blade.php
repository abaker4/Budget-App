@extends('layouts.master')

@section('content')
    <div class="columns">
        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading has-text-centered">
                    Weekly Activity
                </p>
                <h1 id="weeklyAmount" class="title is-1 has-text-centered" style="font-weight: bolder; margin-top: 7rem;">
                    ${{$weekly_amount}}
                </h1>
                <form method="POST" action="/dailyexpenses/daily_total">
                    {{csrf_field()}}
                    <div class="title is-4 has-text-centered field has-addons is-visible-desktop is-hidden-mobile">
                        <p class="control">
                             <span class="select">
                               <select name="daily_category_id">
                                   <option value="1">Groceries</option>
                                   <option value="2">Restaurants</option>
                                   <option value="3">Alcohol/Bars</option>
                                   <option value="4">Coffee Shops</option>
                                   <option value="5">Gas/Fuel</option>
                                   <option value="6">Clothing</option>
                                   <option value="7">Fast Food</option>
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
            </section>
            <div class="has-text-centered" style="margin-left: 14rem; margin-bottom: 4rem;">
                 @include('layouts.form')
            </div>
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

