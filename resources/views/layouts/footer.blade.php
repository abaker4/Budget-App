
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

    $(function() {

        $('#step3').addClass('animated fadeInRight');

        $('#step4').addClass('animated fadeInRight');

        $('#step5').addClass('animated fadeInRight');

        $('#step6').addClass('animated fadeInRight');

        $('#step7').addClass('animated fadeInRight');

        $('#step8').addClass('animated fadeInRight');

        $('#step9').addClass('animated fadeInRight');

    
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
        });



</script>
</body>
</html>