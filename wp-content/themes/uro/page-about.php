<?php
    get_header();
    the_post();
?>
<div class="container">
    <div class="jumbotron">
        <?php the_post_thumbnail() ?>
    </div>
</div>
<div class="container pageBody">
    <div class="left-content">
        <h1 class="heading-1">
            About Us
        </h1>
        <ul class="text">
            <?php the_content(); ?>
        </ul>
    </div>
    <?php require_once 'rigthCol.php';?>
</div>
<?php
    get_footer();
?>