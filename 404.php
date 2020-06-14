<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package KG_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kgtheme' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="error-p"><?php esc_html_e( 'It looks like nothing was found at this location.', 'kgtheme' ); ?></p>
				<p class="error-p">Go back to <a class="error-a" href="<?php echo esc_url( home_url() );?>">home page</a>.</p>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
