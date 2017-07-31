
<section class="hero is-light">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <p class="has-text-centered" style="margin-bottom: 1rem; color:#2767bf;">Sign Up for Email Alerts</p>
                    <div class="field has-addons" style="margin-left: 7rem;">
                        <p class="control has-icons-left">
                            <input class="input" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                             </span>
                        </p>
                        <a class="button is-info" style="color:white;">Subscribe</a>
                    </div>
                </div>

           </div>
        </div>
    </div>
</section>
<footer class="footer" style="color:#262F36;">
    <div class="container">
        <div class="columns">
                <div class="column is-5">
                    <h1 class="title is-4"style="color:#2767bf;">About Us</h1>
                    <p>Budget App is pretty much amazing! Tracking expenses and making informed decisions based on real time data hasn't been easier. </p>
                </div>
                <div class="column is-1"></div>
                <div class="column is-2">
                    <h1 class="title is-4" style="color:#2767bf;">Product</h1>
                    <ul>
                        <li>Features</li>
                        <li>Examples</li>
                        <li>Tour</li>
                        <li>Gallery</li>
                    </ul>
               </div>
                <div class="column is-2">
                    <h1 class="title is-4" style="color:#2767bf;">Company</h1>
                    <ul>
                        <li>Home</li>
                        <li>Testimonials</li>
                        <li>FAQ</li>
                        <li>Statistics</li>
                    </ul>
                </div>
            <div class="column is-2">
                <h1 class="title is-4" style="color:#2767bf;">Extras</h1>
                <ul>
                    <li>Terms</li>
                    <li>Privacy</li>
                    <li>License</li>
                    <li>GitHub</li>
                </ul>
            </div>
        </div>
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <div class="content has-text-centered">
                    <p style="color:#262F36; padding-top: 4rem;"><em>Budget-App&copy; 2017. All Rights Reserved</em></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js></script>
<script src="https://unpkg.com/vue@2.3.4"></script>
<script src="js/utils.js"></script>
<script src="js/main.js"></script>
<script>

    $(function(){

//        $('#step1').addClass('animated slideInDown');
//
//        $('#step2').addClass('animated ');
//
//        $('#step3').addClass('animated fadeIn');
//
//        $('#step4').addClass('animated fadeIn');
//
//        $('#step5').addClass('animated fadeIn');
//
//        $('#step6').addClass('animated fadeIn');
//
//        $('#step7').addClass('animated fadeIn');
//
//        $('#step8').addClass('animated fadeIn');
//
//        $('#step9').addClass('animated fadeIn');

        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels:['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                datasets: [{
                    label: 'Groceries',
                    data: [12, 19, 3, 5, 2, 3, 19],
                    backgroundColor: [
                        'transparent'
//                        'rgba(255, 99, 132, 0.2)',
//                        'rgba(54, 162, 235, 0.2)',
//                        'rgba(255, 206, 86, 0.2)',
//                        'rgba(75, 192, 192, 0.2)',
//                        'rgba(153, 102, 255, 0.2)',
//                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }, {
                    label: 'Restaurants',
                    data: [27, 19, 3, 59, 12, 23, 35],
                    backgroundColor: [
                        'transparent'
//                        'rgba(255, 99, 132, 0.2)',
//                        'rgba(54, 162, 235, 0.2)',
//                        'rgba(255, 206, 86, 0.2)',
//                        'rgba(75, 192, 192, 0.2)',
//                        'rgba(153, 102, 255, 0.2)',
//                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'cadetblue'
//                        'rgba(255,99,132,1)',
//                        'rgba(54, 162, 235, 1)',
//                        'rgba(255, 206, 86, 1)',
//                        'rgba(75, 192, 192, 1)',
//                        'rgba(153, 102, 255, 1)',
//                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }, {

                    label: 'Alcohol/Bars',
                    data: [50, 19, 0, 0, 19, 30, 60],
                    backgroundColor: [
                        'transparent'
//                        'rgba(255, 99, 132, 0.2)',
//                        'rgba(54, 162, 235, 0.2)',
//                        'rgba(255, 206, 86, 0.2)',
//                        'rgba(75, 192, 192, 0.2)',
//                        'rgba(153, 102, 255, 0.2)',
//                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'orange'
//                        'rgba(255,99,132,1)',
//                        'rgba(54, 162, 235, 1)',
//                        'rgba(255, 206, 86, 1)',
//                        'rgba(75, 192, 192, 1)',
//                        'rgba(153, 102, 255, 1)',
//                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }, {

                    label: 'Coffee Shops',
                    data: [8, 0, 0, 0, 15, 5, 10],
                    backgroundColor: [
                        'transparent'
//                        'rgba(255, 99, 132, 0.2)',
//                        'rgba(54, 162, 235, 0.2)',
//                        'rgba(255, 206, 86, 0.2)',
//                        'rgba(75, 192, 192, 0.2)',
//                        'rgba(153, 102, 255, 0.2)',
//                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'Brown'
//                        'rgba(255,99,132,1)',
//                        'rgba(54, 162, 235, 1)',
//                        'rgba(255, 206, 86, 1)',
//                        'rgba(75, 192, 192, 1)',
//                        'rgba(153, 102, 255, 1)',
//                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }, {

                    label: 'Gas/Fuel',
                    data: [, 0, 0, 0, 15, 0, 25],
                    backgroundColor: [
                        'transparent'
//                        'rgba(255, 99, 132, 0.2)',
//                        'rgba(54, 162, 235, 0.2)',
//                        'rgba(255, 206, 86, 0.2)',
//                        'rgba(75, 192, 192, 0.2)',
//                        'rgba(153, 102, 255, 0.2)',
//                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'Black'
//                        'rgba(255,99,132,1)',
//                        'rgba(54, 162, 235, 1)',
//                        'rgba(255, 206, 86, 1)',
//                        'rgba(75, 192, 192, 1)',
//                        'rgba(153, 102, 255, 1)',
//                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }, {

                    label: 'Clothing',
                    data: [9, 0, 0, 0, 15, 35, 27],
                    backgroundColor: [
                        'transparent'
//                        'rgba(255, 99, 132, 0.2)',
//                        'rgba(54, 162, 235, 0.2)',
//                        'rgba(255, 206, 86, 0.2)',
//                        'rgba(75, 192, 192, 0.2)',
//                        'rgba(153, 102, 255, 0.2)',
//                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'Red'
//                        'rgba(255,99,132,1)',
//                        'rgba(54, 162, 235, 1)',
//                        'rgba(255, 206, 86, 1)',
//                        'rgba(75, 192, 192, 1)',
//                        'rgba(153, 102, 255, 1)',
//                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }, {

                    label: 'Fast Food',
                    data: [0, 6, 0, 0, 9, 5, 12],
                    backgroundColor: [
                        'transparent'
//                        'rgba(255, 99, 132, 0.2)',
//                        'rgba(54, 162, 235, 0.2)',
//                        'rgba(255, 206, 86, 0.2)',
//                        'rgba(75, 192, 192, 0.2)',
//                        'rgba(153, 102, 255, 0.2)',
//                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'Green'
//                        'rgba(255,99,132,1)',
//                        'rgba(54, 162, 235, 1)',
//                        'rgba(255, 206, 86, 1)',
//                        'rgba(75, 192, 192, 1)',
//                        'rgba(153, 102, 255, 1)',
//                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1

                }]


            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        })
    });



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
</body>
</html>