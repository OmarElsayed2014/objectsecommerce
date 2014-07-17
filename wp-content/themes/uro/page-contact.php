<?php
    get_header();
    the_post();
?>
<div class="container">
    <div class="jumbotron">
    </div>
</div>
<div class="container pageBody">
    <div class="left-content">
        <h1 class="heading-1">
            Contact Form
        </h1>
        <ul class="text">
            <?php the_content(); ?>
        </ul>
    </div>
    <div class="right-content">
    </div>
</div>
<?php
    get_footer();
?>
