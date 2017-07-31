<section class="hero is-light">
    <div class="hero-body">
        <div class="container">
            <div class="column">
                <div class="column is-one-third">
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                             </span>
                        </p>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
            </p>
            <p>
                <a class="icon" href="https://github.com/jgthms/bulma">
                    <i class="fa fa-github"></i>
                </a>
            </p>
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