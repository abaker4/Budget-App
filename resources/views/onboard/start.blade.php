@include('layouts.onboardheader')
<body>
<section class="hero is-medium main-section">
    <div class="hero-body">
        <div class="container-elevo">
            <div class="columns">
                <div class="column is-7">
                    <h4 class="title is-4 is-white is-bold">
                        Boost Your Budgeting Performance
                    </h4>
                    <h1 class="title is-2 is-white is-bold">
                        Hello <b style="color:#60CC4F;">{{$user->name}}</b>,</br>We're glad you decided to start your money saving journey
                    </h1>
                    <h1 class="title is-4 is-white">
                        Take a minute and answer a few questions for us so we can better understand how to help you start budgeting.
                    </h1>
                    <form>
                        <div class="field">
                            <div class="field has-addons">
                                <p class="control">
                                    <a class="button is-success animated fadeInUp common-Button" href="/home" style="border-radius: 10px; text-decoration: none;">Get Started</a>
                                </p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="images-container is-hidden-mobile animated fadeInRight">
        <img src="/img/checkmark.png" alt="checkmark" />
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
