
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <?php wp_nav_menu(
                        array( 'theme_location' => 'secondary',
                                'container' => 'div',
                                'container_class' => 'col-md-8 col-lg-8 col-sm-8 col-xs-4',
                                'menu_class' => 'menu-footer'
                            )); ?>
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 text-right copyright">All Content Copyright 2013 @A22 All Rights Reserved. </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>

        <script>

            $('.join-link').click(function() {
                $('.join-links').slideToggle();
            });
            $('.search-link').click(function() {
                $('.search-box').slideToggle();
            });

            $('.category-list .img-box').mouseenter(function() {
                $(this).find('.caption-div').fadeIn(300);
            })
            $('.category-list .img-box').mouseleave(function() {
                $(this).find('.caption-div').fadeOut(700);
            })

        </script>
        <script src="js/grid.js"></script>
        <script>
$(function() {
    Grid.init();
});
        </script>
    </body>
</html>


