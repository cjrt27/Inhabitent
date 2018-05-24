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
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p><?php echo CFS()->get('price'); ?></p>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
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

				<footer class="entry-footer">
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->


		

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
