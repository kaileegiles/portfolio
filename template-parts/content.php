<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KG_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
			<?php
			if ( is_singular() ) : ?>
				<div class="project-title">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<div class="proj-line-01"></div>
					<div class="proj-line-02"></div>
				</div>
			<?php else : ?>
				<div class="project-title">
					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
					<div class="proj-line-01"></div>
					<div class="-proj-line-02"></div>
				</div>
			<?php endif;

			if( function_exists('get_field') ) :
				if( get_field('project_tools') ) : ?>
					<p class="tools"><?php the_field('project_tools'); ?></p>
				<?php endif;
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					kgtheme_posted_on();
					kgtheme_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
	</header><!-- .entry-header -->

	<?php kgtheme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'kgtheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kgtheme' ),
				'after'  => '</div>',
			)
		);
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php kgtheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
