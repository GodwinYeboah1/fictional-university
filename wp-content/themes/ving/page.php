<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ving
 */

if (is_front_page()) :
	get_header('home');
else :
	get_header(); 
endif; ?>

	<?php if (get_theme_mod('ving-sidebar','right') == 'left' ) { ?>
		<?php get_sidebar(); ?>
	<?php } ?>

	<div id="primary" class="content-area col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if (get_theme_mod('ving-sidebar','right') == 'right' ) { ?>
		<?php get_sidebar(); ?>
	<?php } ?>
	
	<?php get_footer(); ?>
