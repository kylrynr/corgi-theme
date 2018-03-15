<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-header">
                    <h1 class="blog-title">The Bootstrap Blog</h1>
                    <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">

                <div class="blog-post">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p><?php echo get_the_date( 'd-m-Y' ); ?></p>
                        <p><?php echo wp_trim_words( get_the_content(), 100, '...'); ?></p>

                    <?php endwhile; else : ?>

                        <p><?php _e( 'Sorry, no posts matched your criteria' ); ?></p>

                    <?php endif; ?>

                </div>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>

<?php get_footer(); ?>

