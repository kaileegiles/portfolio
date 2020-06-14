<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KG_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php kgtheme_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="main-content-container">
			<div class="text-container">
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
			<div class="line-01 animate__animated animate__fadeInUpBig"></div>
			<div class="line-02 animate__animated animate__fadeInRightBig"></div>
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
