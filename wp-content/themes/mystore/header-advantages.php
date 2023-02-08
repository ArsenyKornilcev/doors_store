<?php
$posts = get_posts( [
    'numberposts' => -1,
    'category_name' => 'advantages',
    'orderby' => 'title',
    'order' => 'DESC',
    'post_type' => 'post',
    'suppres_filter' => true,
] );
foreach ($posts as $post) {
    setup_postdata($post);
?>
    <div class="col-4 col-lg-6 col-sm-12 advantages-card">
        <?php the_post_thumbnail( 'adv_thumbnail' ); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>
<?php
}
wp_reset_postdata();
?>
