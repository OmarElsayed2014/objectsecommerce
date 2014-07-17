<?php get_header(); ?>
<div class="container">
    <div class="jumbotron jm2">
    </div>
</div>
<div class="container pageBody">
    <h1 class="heading-3">
        Object Staff Members
    </h1>
    <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $allPosts= new WP_Query(array("post_type" => "post", 'paged' => $paged, 'posts_per_page' => 2,));

        while($allPosts->have_posts()):$allPosts->the_post();
            ?>
                <div class="list-element">
                    <div>
                        <?php the_title(); ?>
                    </div>
                    <?php
                        the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
                    ?>
                </div>
                <?php
        endwhile;
        wp_pagenavi(array('query' => $allPosts));
        
        wp_reset_query();

    ?>
</div>
<?php get_footer(); ?>