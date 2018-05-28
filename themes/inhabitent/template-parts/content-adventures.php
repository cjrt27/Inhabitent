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
		<div class="adventure-thumbnail-wrapper">
			<a href="<?php echo get_permalink()?>"><?php the_post_thumbnail( 'large' ); ?></a>
		</div>
		<?php endif; ?>

	</header><!-- .entry-header -->




	<div class="adventures-info">
		<p class="title"><?php echo the_title(); ?></p>
        <a href="<?php home_url()?>/wordpressInhabitent/adventures" class="button" id="read-more">Read More</a>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
