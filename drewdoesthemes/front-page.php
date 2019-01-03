
<?php get_header(); ?>

<div id="primary" class="fp-contentArea content-area">
    <main id="main" class="fp-main site-main">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

           <!-- post title -->
           <header class="post-title">
               <h2 class="p-name">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h2>
                <!-- /post title -->
                <!-- post details -->
                <p class="p-details"><?php the_date('F j, Y'); ?> / <?php the_time('g:i a'); ?></p>
                <!-- /post details -->
            </header>

            <!-- post thumbnail -->
            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="p-image h-entry__image-link">
                    <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
                </a>
            <?php endif; ?>
            <!-- /post thumbnail -->
            <p><?php the_excerpt(); ?></p>
            <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="arrow-link">Read the full article</a></p>

            <?php edit_post_link(); ?>

        </article>
<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

<!-- article -->
<article>
    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
</article>
<!-- /article -->

<?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();