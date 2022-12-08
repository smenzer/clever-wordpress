<?php get_header(); ?>

<div class="news">
    <section id="id5-news-top-sect" class="id5-top-sect">
      <div class="id5-top-sect-inner-wrapper">
        <h1 class="id5-static-page-title">
          Latest News and Events
        </h1>
      </div>
      <div
        id="id5-news-top-sect-particles"
        class="id5-top-sect-particles"
      ></div>
    </section>

    <div class="container-fluid">
        <div class="row justify-content-center py-4">
            <div class="col-9">
                <?php rewind_posts(); ?>
                <?php if ( have_posts() ) : ?>
                    <?php $item_number = 0; ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php if( $item_number < 50 ) : ?>
                            <div <?php post_class( 'card mb-3' ); ?> id="post-<?php the_ID(); ?>">
                                <div class="row no-gutters pb-4">
                                    <div class="col-md-4">
                                        <a href="<?php echo esc_url(get_permalink()) ?>">
                                            <?php
                                            if ( has_post_thumbnail()) {
                                                echo '<img class="card-img" src="'.esc_url(id5_image_url_by_id(get_post_thumbnail_id(), 'large')).'" />';
                                            } // #TODO put in a default image
                                            ?>
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body pt-0">
                                            <a href="<?php echo esc_url(get_permalink()) ?>">
                                                <h3 class="card-title"><?php the_title(); ?></h3>
                                            </a>
                                            <ul class="info card-text text-muted small">
                                                <li>
                                                    <i class="far fa-user"></i> Posted by <?php the_author(); ?>
                                                </li>
                                                <li>
                                                    <i class="far fa-calendar-alt"></i> On <?php echo get_the_time( 'M d, Y' ) ?>
                                                </li>
                                            </ul>
                                            <?php the_excerpt( ); ?>
                                            <a class="btn btn-outline-warning" href="<?php echo esc_url(get_permalink()) ?>">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php $item_number++; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'id5_2019' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <!-- #TODO add pagination -->
    </div>
</div>

<?php get_footer(); ?>