<?php
/**
 * Template part for displaying single products.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail-wrapper">
				<a href="<?php echo get_permalink()?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
			</div>
		<?php endif; ?>

	</header><!-- .entry-header -->




	<div class="product-info">
		<p><?php echo the_title(); ?></p>
        <span><?php echo CFS()->get('price'); ?></span>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
