<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Judge_Familiar
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="row site-footer" role="contentinfo">
		<div class="col-sm-6">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div>
		<div class="col-sm-6">
			<a href="http://blogs.magicjudges.org/help/" target="_blank">Supported by the Judge WordPress Network.</a>
			<a class="wordpress" target="_blank" href="https://wordpress.org/"></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
