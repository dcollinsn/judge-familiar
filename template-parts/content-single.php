<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Judge_Familiar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div id="language-single">
			<?php wp_nav_menu( array( 'theme_location' => 'language-single', 'fallback_cb' => false ) ); ?>
		</div>

		<div class="entry-meta">
			<?php
				judge_familiar_posted_on();
				judge_familiar_edit_link();
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'judge-familiar' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php judge_familiar_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
