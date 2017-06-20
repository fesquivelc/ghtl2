<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en" ng-App="HotelApp">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>.::.Hotel Gerens.::. | Un descanso para ejecutivos como tú</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <link rel="stylesheet" type="text/css" href="css/datepicker.css"> <!--Fechas -->
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link  rel= "apple-touch-icon"  sizes= "57x57"  href= "images/ico/apple-icon-57x57.png" > 
        <link  rel= "apple-touch-icon"  sizes= "60x60"  href= "images/ico/apple-icon-60x60.png" > 
        <link  rel= "apple-touch-icon"  sizes= "72x72"  href= "images/ico/apple-icon-72x72.png" > 
        <link  rel= "apple-touch-icon"  sizes= "76x76"  href= "images/ico/apple-icon-76x76.png" > 
        <link  rel= "apple-touch-icon"  sizes= "114x114"  href= "images/ico/apple-icon-114x114.png" > 
        <link  rel= "apple-touch-icon"  sizes= "120x120"  href= "images/ico/apple-icon-120x120.png" > 
        <link  rel= "apple-touch-icon"  sizes= "144x144"  href= "images/ico/apple-icon-144x144.png" > 
        <link  rel= "apple-touch-icon"  sizes= "152x152"  href= "images/ico/apple-icon-152x152.png" > 
        <link  rel= "apple-touch-icon"  sizes= "180x180"  href= "images/ico/apple-icon-180x180.png" > 
        <link  rel= "icon"  type= "image/png"  sizes= "192x192"   href= "images/ico/android-icon-192x192.png" > 
        <link  rel= "icon"  type= "image/png"  sizes= "32x32"  href= "images/ico/favicon-32x32.png" > 
        <link  rel= "icon"  type= "image/png"  sizes= "96x96"  href= "images/ico/favicon-96x96.png" > 
        <link  rel= "icon"  type= "image/png"  sizes= "16x16"  href= "images/ico/favicon-16x16.png" > 
        <link  rel= "manifest"  href= "images/ico/manifest.json" > 
        <meta  name= "msapplication-TileColor"  content= "#ffffff" > 
        <meta  name= "msapplication-TileImage"  content= "images/ico/ms-icon-144x144.png" > 
        <meta  name= "theme-color"  content= "#ffffff" >
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <!-- End Fav and touch icons -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        


    </head>
    
    <body style="background-color:#d7d7d7;margin:auto">
        <ng-include src="'views/cabecera.php'"></ng-include>

             <div ng-view>
               <script src="js/jquery.js"></script>
               <script type="text/javascript" src="js/app.js"></script>
               <script type="text/javascript" src="js/bootstrap-datepicker.js"></script><!--Fechas -->
             
            </div><!--div de las vistas -->

        <ng-include src="'views/pie.php'"></ng-include>
    
       
        <!-- Include javascript -->
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script> 
        <script type="text/javascript" src="js/jquery.cslider.js"></script> 
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script> 
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->


    <!--librerias de Angular -->
        <script src="components/angular/angular.min.js"></script>
        <script src="components/angular-route/angular-route.min.js"></script>
        <script src="scripts/app.js"></script>
        <script src="scripts/controllers/habitacionCtrl.js"></script>
           
        
        <!-- javacript para page habitacion.php galerias -->   
        <script type="text/javascript" src="js/galeria.js" ></script>
        <script type="text/javascript" src="js/habitacion.js" ></script>
        <script type="text/javascript" src="engine1/wowslider.js"></script>
        <script type="text/javascript" src="engine1/script.js"></script>
        
    </body>

       
</html>