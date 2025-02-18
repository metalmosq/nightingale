<?php
/**
 * @package nightingale-retribution
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
		//the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark"-->', esc_url( get_permalink() ) ), '</a></h2>' ); 
		?>

		<?php the_title( sprintf( '<h2 class="entry-title">', 'what' ), '</h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php ng_ret_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ng-ret' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ng-ret' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ng_ret_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
