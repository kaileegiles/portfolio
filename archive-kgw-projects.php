<?php
/**
 * The template for displaying projects archive page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KG_Theme
 */

get_header();
?>

	<main id="primary" class="site-main-projects">

		<?php if ( have_posts() ) : ?>

			<div class="main-content-container">
				<div class="text-container projects">
					<header class="page-header">
						<h1>A few pieces of my work</h1>
					</header><!-- .page-header -->
					<p>This page is regularly updated as I’m always learning, refining, and adding more projects.</p>
					<p class="current-project-title"><strong>Currently working on:</strong></p>
					<p class="current-project">An expense tracker built in React. Final result coming soon.</p>
				</div> <!--end text-container -->
				<div class="line-01"></div>
				<div class="line-02"></div>
			</div><!-- end main-content-container -->

			<div class="project-content">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="project-tile">
					<header class="entry-header">
						<?php
						if ( is_singular() ) :
							the_title( '<h2 class="entry-title">', '</h2>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif; ?>

					</header><!-- .entry-header -->

					<?php if ( function_exists ( 'get_field' ) ) {
						?> <p><?php the_field( 'project_tools' );?></p>
						<div class="wp-block-buttons">
							<div class="wp-block-button is-style-outline dark">
								<a class="wp-block-button__link" href="<?php echo esc_url(get_permalink() ) ?>">See process</a>
							</div><!-- end outline -->
						</div><!-- end block-buttons -->
					<?php } ?>
					</div> <!-- end project-tile -->

				</article><!-- #post-<?php the_ID(); ?> -->

			<?php endwhile;

			the_posts_navigation();

			else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

			</div> <!-- end project-content -->

	</main><!-- #main -->

<?php
get_footer();
