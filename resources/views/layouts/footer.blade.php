

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
<script src="js/intro.js"></script>
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

        </script>
    </body>
</html>