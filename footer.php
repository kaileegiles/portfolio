<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KG_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
				<nav id="footer-nav" class="footer-nav"></nav>
				<?php wp_nav_menu(array('theme_location' => 'footer'));	?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
