<?php get_header(); ?>

    <div class="container">
        <div class="row">

            <div class="col-sm-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="page-header">
                        <h1><?php the_title(); ?></h1>
                        <p><em>
                            By <?php the_author(); ?> 
                            On <?php echo the_time('l, F, jS, Y'); ?>
                            in <?php the_category(', '); ?>
                            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                        </em></p>
                    </div>

                    <?php the_content(); ?>

                    <hr>

                    <?php comments_template(); ?>

                <?php endwhile;  else: ?>

                    <div class="page-header">
                        <h1>Oh no!</h1>
                    </div>

                    <p>No content is appearing for this page!</p>


                <?php endif; ?>

            </div>

            <?php get_sidebar( 'blog' ); ?>

        </div>
    </div>

<?php get_footer(); ?>