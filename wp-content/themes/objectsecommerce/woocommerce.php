<?php  get_header(); ?>

<div class="content">
<div class="container shop-o-c">
    <div class="row">
        <?php require_once 'rightcol.php'; ?>
        <div class="col-md-9 col-lg-10 col-sm-9 col-xs-12 product-details">
               <?php woocommerce_content(); ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</div>


<?php get_footer(); ?>