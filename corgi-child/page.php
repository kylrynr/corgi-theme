<?php get_header(); ?>
        ​
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <?php endif; ?>
                    <div class="carousel-caption flex">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_field('hero_sub_text'); ?></p>
                    </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-sm-8">
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="page-header">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <?php the_content(); ?>

                <?php endwhile;  else: ?>

                    <div class="page-header">
                        <h1>Oh no!</h1>
                    </div>

                    <p>No content is appearing for this page!</p>


                <?php endif; ?>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>

<?php get_footer(); ?>