<?php
/**
 * The Template for displaying all Daycare Centre posts.
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'daycare_centre' ); ?>

            <?php // gorham_post_nav(); ?>

        <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>