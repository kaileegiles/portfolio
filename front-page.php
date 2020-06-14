<?php
/**
 * The template for the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KG_Theme
 */

get_header();
?>

	<main id="primary" class="site-main-home">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php kgtheme_post_thumbnail(); ?>

				<div class="entry-content">
					<div class="main-content-container">
						<div class="text-container home">
						<?php
						the_content(); ?>

						<?php wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kgtheme' ),
								'after'  => '</div>',
							)
						);
						?>
						</div> <!-- end text-container -->
						<div class="line-01"></div>
						<div class="line-02"></div>
					</div><!-- end main-content-container -->
						

				</div><!-- .entry-content -->

				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Edit <span class="screen-reader-text">%s</span>', 'kgtheme' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-<?php the_ID(); ?> --> 

			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
