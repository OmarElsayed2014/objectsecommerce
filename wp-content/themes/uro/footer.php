<footer class="row">
            <div class="container">
                <ul>
                    <li class="heading-2">
                        Footer Menu
                    </li>
                    <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
                </ul>
                <div class="clear"></div>
                <div class="vendor">
                    <img src="<?php bloginfo("template_url"); ?>/images/vendor-logo.png" alt="vendor logo" />
                    <a href="http://www.objects.ws"><img src="<?php bloginfo("template_url"); ?>/images/objects-logo.png" alt="objects logo" /></a>
                    <br>
                    This website is a cooperation between TeamFives.com and Objects.ws
                    <br>
                    <span>&copy; All Artwork is done by labs.teamfives.com, Do not use for personal use.</span>
                </div>
            </div>
        </footer>
        <div id="background"></div>
        <!--Vendors Scripts-->
        <script src="<?php bloginfo("template_url"); ?>/javascripts/vendor/jquery-1.11.0.min.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/javascripts/vendor/bootstrap.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/javascripts/vendor/noconsole.js"></script>
        <!--Customized Scripts-->
        <script src="<?php bloginfo("template_url"); ?>/javascripts/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>