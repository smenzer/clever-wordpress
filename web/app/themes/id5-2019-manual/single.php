<?php get_header(); ?>

<div class="news single-post" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
?>
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-md-10 text-center">
                <?php
                if ( has_post_thumbnail()) {
                    echo '<img class="featured-image" src="'.esc_url(id5_image_url_by_id(get_post_thumbnail_id(), 'large')).'" />';
                }
                ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3><?php the_title(); ?></h3>
                <ul class="info card-text text-muted small">
                    <li>
                        <i class="far fa-user"></i> Posted by <?php the_author(); ?>
                    </li>
                    <li>
                        <i class="far fa-calendar-alt"></i> On <?php echo get_the_time( 'M d, Y' ) ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center pb-4">
            <div class="col-md-10">
                <?php the_content( ); ?>
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-md-10">
                <a href="/news"><i class="fas fa-arrow-left"></i> Back to Latest News</a>
            </div>
        </div>
    </div>
<?php
    endwhile;
endif;
?>
</div>

<?php get_footer(); ?>