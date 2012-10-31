<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>InfoScreen</title>
        <meta name="description" content="MyTurtle">
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
        <link rel="stylesheet" href="client/css/normalize.css">
        <link rel="stylesheet" href="client/css/main.css">
        <script src="client/js/libs/modernizr.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
			
        <div id="container" class="clearfix">
        
        </div>
        
        <footer>
            <img src="client/css/images/ft_logo.jpg" alt="FlatTurtle" id="ftlogo" />
            <p id="where" class="text-color">Check in at <span class="bold">location</span> or tag <span class="bold">#location</span></p>
        	<img src="client/css/images/logo_placeholder.png" alt="Logo" id="loc_logo" />
        </footer>

        <script src="client/js/libs/jquery.js"></script>
        <script src="client/js/libs/underscore.js"></script>
        <script src="client/js/libs/backbone.js"></script>
        
        <script src="client/js/screen.js"></script>
        <script src="client/js/turtles.js"></script>
        <script src="client/js/panes.js"></script>
        
        <script>
            Screen.load('http://10.13.37.7/controlbay<?php echo key($_GET); ?>.json');
        </script>
        
        <script src="client/js/main.js"></script>
    </body>
</html>
