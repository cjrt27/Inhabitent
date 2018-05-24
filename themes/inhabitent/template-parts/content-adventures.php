<?php
/**
 * Template part for displaying single adventures.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php echo get_permalink()?>"><?php the_post_thumbnail( 'large' ); ?></a>
		<?php endif; ?>

	</header><!-- .entry-header -->




	<div class="adventures-info">
		<p><?php echo the_title(); ?></p>
        <a href="<?php home_url()?>/wordpressInhabitent/adventures" class="button">Read More</a>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->