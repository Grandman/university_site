<?php
/**
 * Template Name: Дисциплина
 */

get_header(); ?>

<?php get_sidebar(); ?>
	<main id="main" class="site-main" role="main">
	<?php if ( is_user_logged_in() ): ?>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
	<?php else: ?>
	<h1><?php _e('Access denied', 'twentysixteen'); ?></h1>
	<?php endif; ?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

<!-- .content-area -->

<?php get_footer(); ?>
