<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>URO : Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="author" href="<?php bloginfo("template_url"); ?>/humans.txt" />

        <!--Favicon-->
        <link rel="shortcut Icon" href="<?php bloginfo("template_url"); ?>/favicons/favicon.ico">
        <link rel="icon" href="<?php bloginfo("template_url"); ?>/favicons/favicon.ico" type="image/x-icon">

        <!--Apple Touch Icons-->
        <link rel="apple-touch-icon" href="<?php bloginfo("template_url"); ?>/favicons/apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" href="<?php bloginfo("template_url"); ?>/favicons/apple-touch-icon-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo("template_url"); ?>/favicons/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo("template_url"); ?>/favicons/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo("template_url"); ?>/favicons/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo("template_url"); ?>/favicons/apple-touch-icon-144x144-precomposed.png">

        <!--Vendors Stylesheets-->
        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/vendor/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/vendor/font-awesome.css" />
        <!--Customized Stylesheets-->
        <link href="<?php bloginfo("template_url"); ?>/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo("template_url"); ?>/css/print.css" media="print" rel="stylesheet" type="text/css" />
        <!--[if IE]>
            <link href="css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <![endif]-->
        <?php wp_head(); ?>
        <script src="<?php bloginfo("template_url"); ?>/javascripts/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body class="homePage">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <a href="javascript:void(0)" class="pull-right book-app">Book an Appointment</a>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="<?php bloginfo("template_url"); ?>/images/logo.png" alt="URO Logo" /></a>
                </div>
                <div class="clear"></div>
                <?php wp_nav_menu(
                        array( 'theme_location' => 'primary',
                                'container' => 'div',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'container_class' => 'collapse navbar-collapse',
                                'menu_class' => 'nav nav-justified'
                            )); ?>
            </nav>
        </div>
