<?php
/**
 * The template for displaying all single posts.
 *
 * @package nightingale-retribution
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-xs-10 col-xs-offset-1" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php ng_ret_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
