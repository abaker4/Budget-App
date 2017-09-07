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
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/introjs.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/onboard.css">
    <script src="https://use.fontawesome.com/e5fa0f90ea.js"></script>
    <style>
        .images-container{
            position:absolute;
            width:42%;
            bottom:0;
            right:0;
            height:80%;
            overflow:hidden
        }
        .images-house img{

            position:absolute;
            -webkit-box-shadow:2px 2px 9px 1px rgba(0,0,0,0.25);
            box-shadow:2px 2px 9px 1px rgba(0,0,0,0.25)

        .common-Button {
            white-space: nowrap;
            display: inline-block;
            height: 40px;
            line-height: 40px;
            padding: 0 14px;
            box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
            background: #fff;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .025em;
            text-decoration: none;
            transition: all .15s ease;
            margin-top: 1em;
            margin-left: 3em;
        }

        .common-Button:hover{

            transform:translateY(-1px);
            box-shadow:0 7px 14px rgba(50,50,93,.1),0 3px 6px rgba(0,0,0,.08);
        }

        .common-Button:active{

            background-color:#f6f9fc;
            transform:translateY(1px);
            box-shadow:0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08)
        }
        .common-ButtonGroup .common-Button{
            -ms-flex-negative:0;
            flex-shrink:0;margin:10px
        }
    </style>
</head>
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
