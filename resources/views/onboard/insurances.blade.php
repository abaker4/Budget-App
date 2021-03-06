@include('layouts.onboardheader')
    <body>
        <section class="hero is-medium main-section">
            <div class="hero-body">
                <div class="container-elevo">
                    <div class="columns">
                        <div class="column is-7">
                            <h1 class="title is-4 is-bold" style="color: #fff;">
                                Step 4
                            </h1>
                            <h4 class="title is-2 is-white is-bold" style="color: #fff;">
                                <span>How Much Do You Pay In Insurances Per Month?</span>
                            </h4>
                            <form method="POST" action="/onboard/store">

                                {{csrf_field()}}

                                <input type="hidden" name="type_id" value="2">
                                <input type="hidden" name="monthly_category_id" value="4">
                                <div class="field">
                                    <div class="field has-addons">
                                        <label class="label is-large{{ $errors->has('amount') ? ' has-error' : '' }}"></label>
                                        <div class="control has-icons-left">
                                            <p class="control animated fadeInRight">
                                                @if(!empty($insurances))
                                                    <input name="id" value="{{$insurances->id }}" type="hidden">
                                                    <input class="input" name="amount" value="{{$insurances->amount}}" type="text" required>
                                                @else
                                                    <input class="input" name="amount" value="" type="text" required>
                                                @endif
                                            </p>
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-usd"></i>
                                                </span>
                                            @if ($errors->has('amount'))
                                                <span class="help-block is-danger">
                                                    <strong>{{ $errors->first('amount') }}</strong>
                                                </span>
                                            @endif
                                            <p class="control">
                                                <button class="button is-success common-Button" type="submit" href="/home" style="border-radius: 10px; text-decoration: none; margin-top: 1rem;">Next</button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="images-container images-house is-hidden-mobile animated slideInRight">
                <img src="/img/insurance.png" alt="insurance" />
            </div>
            <div class="hero-foot">
                <figure class="image cloudz is-hidden-mobile">
                    <img src="/img/cloudz.png" alt="Cloudz">
                </figure>
                <figure class="image is-hidden-tablet cloudz">
                    <img src="/img/cloudz.png" alt="Cloudz">
                </figure>
            </div>
        </section>
    </body>
</html>
