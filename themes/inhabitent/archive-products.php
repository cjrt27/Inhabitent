<?php
/**
 * The template for displaying products pages (shop page).
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>

				<!-- Loop to get do,eat,sleep,wear as icons on top -->
				<?php 
				$terms =get_terms(array(
					'taxonomy'=>'product_type',
					'hide_empty'=>false
				));
				?>
				<?php foreach ( $terms as $term) : 
?>		
		<div class="product-type-on-shop">
        <div class="product-type-title-<?php echo $term->name;?>"><a href="<?php echo get_term_link($term)?>" class="product-type-category-<?php echo $term->name;?>"><?php echo $term->name; ?></a></div>	
		</div>
       <?php 
                endforeach;
            ?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'product' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
