<!DOCTYPE html>
<html>
    <head>
        <title>Category</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Bootstrap -->
        <link href="<?php bloginfo("template_url"); ?>/css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/css/component.css" />
        <script src="js/modernizr-2.6.2.min.js"></script>
        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/fonts/fonts.css">
        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/fonts/font-awesome.css">

    </head>
    <body>



        <div class="Main-container">


            <div class="min-menu fixed-head">

                <div class="container">
                    <div class="logo text-center"><a href=""><img src="<?php bloginfo("template_url"); ?>/images/Logo.png"></a>


                        <div class="pull-right col-sm-12 col-xs-4 right-search">
                            <ul>

                                <li><a href="javascript:void(0);" class="join-link">Join</a>

                                    <div class="join-links">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-instagram"></i></a>
                                        <a href=""><i class="fa fa-pinterest"></i></a>
                                        <a href=""><i class="fa fa-tumblr"></i></a>
                                        <input name="" type="text" placeholder="Enter Email">
                                    </div>
                                </li>
                                <li><a href=""> Sign in</a></li>
                                <li class="cart"><a href="">  (  0  )</a></li>
                                <li><a href="javascript:void(0);" class="search-link">Search</a>

                                    <div class="search-box">
                                        <input name="" type="text" placeholder="Enter Email">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div role="navigation" class="navbar ">
                    <a href="" class="Disc pull-right">DISCOVER</a>
                    <div class="container">
                        <div class="navbar-header">

                        </div>

                        <?php wp_nav_menu(
                        array( 'theme_location' => 'primary',
                                'container' => '',
                                'menu_class' => 'nav navbar-nav'
                            )); ?>




                    </div>
                </div>
            </div>