<?php
/**
 * The template for displaying all single product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="product-image-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div>
				<div class="product-content-wrapper">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p class="product-price"><?php echo CFS()->get('price'); ?></p>
					<p><?php the_content(); ?></p>
					<div class="social-buttons">
						<button type="button" class="black-btn">
							<i class="fab fa-facebook-f"></i>
							LIKE
						</button>
						<button type="button" class="black-btn">
						<i class="fab fa-twitter"></i>
							TWEET
						</button>
						<button type="button" class="black-btn">
						<i class="fab fa-pinterest"></i>
							PIN
						</button>
				</div><!-- .entry-content -->
				</div>
			</article><!-- #post-## -->
			<footer class="entry-footer">
				</footer><!-- .entry-footer -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
