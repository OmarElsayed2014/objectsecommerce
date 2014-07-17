<div class="right-content">
    <h1 class="heading-1">
        Advertisements
    </h1>
    <div class="ad"><?= get_page(39)->post_content ?></div>
    <?php if (is_active_sidebar('home_right_1')) : ?>
        <div class="ad" role="complementary">
            <?php dynamic_sidebar('home_right_1'); ?>
        </div>
    <?php endif; ?>
</div>