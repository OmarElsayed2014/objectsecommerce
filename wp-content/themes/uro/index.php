<?php get_header(); ?>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="container">
            <div class="jumbotron">
                <a class="take-a-test" href="#">
                    <span class="main-text">You May Have Blood In the Urine.
                        <br>
                        <span class="sub-text">Take Our Test now to see if you do.</span>
                    </span>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-angle-right fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="container pageBody">
            <div class="left-content">
                <?php $pageData = get_page(33) ?>
                <h1 class="heading-1">
                    <?= $pageData->post_title ?>
                </h1>
                <ul class="text">
                    <?= $pageData->post_content ?>
                </ul>
            </div>
            <?php require_once 'rigthCol.php';?>
        </div>
<?php get_footer();
