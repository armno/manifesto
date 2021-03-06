<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ArmNo's Manifesto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="hulu" style="display: none;">
            <h1>Manifesto</h1>
            <a href="#" id="as-me">as me</a>
        </div>

        <div id="linch" style="display: none;">
            <h1 class="what">ಠ_ಠ</h1>
            <p>Hello?</p>

            <p class="me">made by <a href="http://armno.in.th">armno</a></p>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <div id="fb-root"></div>
        <script>
          window.fbAsyncInit = function() {
            // init the FB JS SDK
            FB.init({
              appId      : '127330613993014', // App ID from the App Dashboard
              channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File for x-domain communication
              status     : true, // check the login status upon init?
              cookie     : true, // set sessions cookies to allow your server to access the session?
              xfbml      : true  // parse XFBML tags on this page?
            });

            // Additional initialization code such as adding Event Listeners goes here
            FB.getLoginStatus(function(s) {
                if ( s.status === 'connected' ) {
                    if ( s.authResponse.userID === '1007588651' ) {
                        $('#hulu').fadeIn('fast');
                    } else {
                        $('#linch').fadeIn('fast');
                        $('#hulu').remove();
                    }
                } else if ( s.status === 'not_authorized' ) {
                    $('#linch').fadeIn('fast');
                    $('#hulu').remove();
                } else {
                    console.log('bah!');
                }
            });

            $('#as-me').on('click', function() {
                
                FB.ui({
                    method: 'feed'
                },
                function(r) {
                    console.log(r);
                });
            });
          };

          // Load the SDK's source Asynchronously
          // Note that the debug version is being actively developed and might 
          // contain some type checks that are overly strict. 
          // Please report such bugs using the bugs tool.
          (function(d, debug){
             var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement('script'); js.id = id; js.async = true;
             js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
             ref.parentNode.insertBefore(js, ref);
           }(document, /*debug*/ false));
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-2721521-25'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
