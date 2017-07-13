@extends('layouts.master')

@section('content')
    <div class="columns">
        <div class="column is-6">
            <section class="panel">
                <p class="panel-heading">
                    name
                </p>
                <div id="canvas-holder">
                    <canvas id="chart-area" style="height: 280px;"></canvas>
                </div>
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
                </p>
                <h1 class="title is-1">$45</h1>

            </section>
        </div>
    </div>


    <div class="columns">
            <div class="column is-6">
                <section class="panel">
                    <p class="panel-heading">
                        name
                    </p>
                    <canvas id="myChart" style="height: 280px;"></canvas>
                </section>
            </div>

            <div class="column is-6">
                <section class="panel">
                    <p class="panel-heading">
                        name
                    </p>

                    <h1 class="title is-1">$56</h1>

                   <form method="POST" action="/dailyexpenses/store_expense">

                       {{csrf_field()}}

                        <div class="field has-addons">
                            <p class="control">
                            <span class="select">
                              <select name="daily_category">
                                @foreach(App\Http\Utilities\categories::allDaily() as $category)
                                      <option value="{{$category}}">{{$category}}</option>
                                  @endforeach
                              </select>
                            </span>
                            </p>
                            <p class="control is-expanded">
                                <input class="input" name="amount" type="text" placeholder="Amount of money">
                            </p>
                            <p class="control">
                                <button class="button" type="submit">
                                    Submit
                                </button>
                            </p>
                        </div>
                   </form>
                </section>
            </div>

    </div>





    {{--</div>--}}
            {{--<div class="column is-one-third-desktop is-full-mobile">--}}
                {{--<section class="panel">--}}
                    {{--<p class="panel-heading">--}}
                        {{--Sales--}}
                    {{--</p>--}}
                    {{--<div class="panel-block">--}}

                    {{--<div class="panel-block">--}}
                        {{--<button class="button is-default is-outlined is-fullwidth">--}}
                            {{--View Data--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</section>--}}
            {{--</div>--}}
            {{--<div class="column is-one-half-desktop is-full-mobile">--}}
                {{--<section class="panel">--}}
                    {{--<p class="panel-heading">--}}
                        {{--YoY Comparison--}}
                    {{--</p>--}}
                    {{--<div class="panel-block">--}}


                    {{--</div>--}}
                    {{--<div class="panel-block">--}}
                        {{--<button class="button is-default is-outlined is-fullwidth">--}}
                            {{--View Data--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</section>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<div class="column is-half-desktop is-full-mobile">--}}
        {{--<section class="panel">--}}
            {{--<p class="panel-heading">--}}
                {{--Notifications--}}
            {{--</p>--}}
            {{--<div class="panel-block">--}}
                {{--<div class="notification is-warning">--}}
                    {{--<button class="delete" onclick="((this).parentNode.remove())"></button>--}}
                    {{--<strong>Server 101a is at 90% disk capacity.</strong>--}}
                    {{--<br>--}}
                    {{--<small>1h ago | via: system</small>--}}
                {{--</div>--}}
                {{--<div class="notification">--}}
                    {{--<button class="delete" onclick="((this).parentNode.remove())"></button>--}}
                    {{--<strong>Cron job successfully completed.</strong>--}}
                    {{--<br>--}}
                    {{--<small>2h ago | via: system</small>--}}
                {{--</div>--}}
                {{--<div class="notification">--}}
                    {{--<button class="delete" onclick="((this).parentNode.remove())"></button>--}}
                    {{--<strong>Completed automated backup.</strong>--}}
                    {{--<br>--}}
                    {{--<small>1d ago | via: system</small>--}}
                {{--</div>--}}
                {{--<div class="notification">--}}
                    {{--<button class="delete" onclick="((this).parentNode.remove())"></button>--}}
                    {{--<strong>Security scan complete. 0 exceptions found.</strong>--}}
                    {{--<br>--}}
                    {{--<small>1d ago | via: system</small>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
    {{--</div>--}}
    {{--<div class="column is-half-desktop is-full-mobile">--}}
        {{--<section class="panel">--}}
            {{--<p class="panel-heading">--}}
                {{--Forecast--}}
            {{--</p>--}}
            {{--<div class="panel-block">--}}
                {{--<div id="chart5" style="height: 280px;"></div>--}}
            {{--</div>--}}
        {{--</section>--}}
    {{--</div>--}}
    {{--<div class="column is-half-desktop is-full-mobile">--}}
        {{--<section class="panel">--}}
            {{--<p class="panel-heading">--}}
                {{--Popular Followers--}}
            {{--</p>--}}
            {{--<div class="panel-block">--}}
                {{--<table class="table">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>Name</th>--}}
                        {{--<th>Instrument</th>--}}
                        {{--<th></th>--}}
                        {{--<th></th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tfoot>--}}
                    {{--<tr>--}}
                        {{--<th>Name</th>--}}
                        {{--<th>Instrument</th>--}}
                        {{--<th></th>--}}
                        {{--<th></th>--}}
                    {{--</tr>--}}
                    {{--</tfoot>--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                        {{--<td>Misty Abbott</td>--}}
                        {{--<td>Bass Guitar</td>--}}
                        {{--<td class="is-icon">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-twitter"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                        {{--<td class="is-icon">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-instagram"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>John Smith</td>--}}
                        {{--<td>Rhythm Guitar</td>--}}
                        {{--<td class="is-icon">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-twitter"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                        {{--<td class="is-icon">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-instagram"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>Robert Mikels</td>--}}
                        {{--<td>Lead Guitar</td>--}}
                        {{--<td class="is-icon">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-twitter"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                        {{--<td class="is-icon">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-instagram"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>Karyn Holmberg</td>--}}
                        {{--<td>Drums</td>--}}
                        {{--<td class="is-icon">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-twitter"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                        {{--<td class="is-icon">--}}
                            {{--<a href="#">--}}
                                {{--<i class="fa fa-instagram"></i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</section>--}}
    {{--</div>--}}
    {{--<div class="column">--}}
        {{--<section class="panel">--}}
            {{--<p class="panel-heading">--}}
                {{--Message User--}}
            {{--</p>--}}
            {{--<div class="panel-block">--}}
                {{--<label class="label">Name</label>--}}
                {{--<p class="control">--}}
                    {{--<input class="input" type="text" placeholder="Text input">--}}
                {{--</p>--}}
                {{--<label class="label">Username</label>--}}
                {{--<p class="control has-icon has-icon-right">--}}
                    {{--<input class="input is-success" type="text" placeholder="Text input" value="bulma">--}}
                    {{--<i class="fa fa-check"></i>--}}
                    {{--<span class="help is-success">This username is available</span>--}}
                {{--</p>--}}
                {{--<label class="label">Email</label>--}}
                {{--<p class="control has-icon has-icon-right">--}}
                    {{--<input class="input is-danger" type="text" placeholder="Email input" value="hello@">--}}
                    {{--<i class="fa fa-warning"></i>--}}
                    {{--<span class="help is-danger">This email is invalid</span>--}}
                {{--</p>--}}
                {{--<label class="label">Subject</label>--}}
                {{--<p class="control">--}}
              {{--<span class="select">--}}
                {{--<select>--}}
                  {{--<option>Select dropdown</option>--}}
                  {{--<option>With options</option>--}}
                {{--</select>--}}
              {{--</span>--}}
                {{--</p>--}}
                {{--<label class="label">Message</label>--}}
                {{--<p class="control">--}}
                    {{--<textarea class="textarea" placeholder="Textarea"></textarea>--}}
                {{--</p>--}}
                {{--<p class="control">--}}
                    {{--<label class="checkbox">--}}
                        {{--<input type="checkbox">--}}
                        {{--Remember me--}}
                    {{--</label>--}}
                {{--</p>--}}
                {{--<p class="control">--}}
                    {{--<label class="radio">--}}
                        {{--<input type="radio" name="question">--}}
                        {{--Yes--}}
                    {{--</label>--}}
                    {{--<label class="radio">--}}
                        {{--<input type="radio" name="question">--}}
                        {{--No--}}
                    {{--</label>--}}
                {{--</p>--}}
                {{--<p class="control">--}}
                    {{--<button class="button is-primary">Submit</button>--}}
                    {{--<button class="button is-link">Cancel</button>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</section>--}}
    {{--</div>--}}

    @endsection

