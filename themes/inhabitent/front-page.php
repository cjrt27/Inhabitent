<?php
/**
 * The template for the static front page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-hero">
			</section>
		

			

<!--  looping through Shop Product Types on front page START -->
<section class="product-container">
		<h1>SHOP STUFF</h1>
<?php 

    $terms = get_terms(array(
		'taxonomy' => 'product_type',
		'hide_empty' => false
	));
        foreach ( $terms as $term) {
?>		
		<div class="product-type-<?php echo $term->name;?>">
		<div class="product-type-image">
		<img src="<?php echo get_template_directory_uri()?>/images/product-type-icons/<?php echo $term->slug;?>.svg" alt="Product Type Image">
		</div>
		<div class= "product-type-desc"><?php echo $term->description; ?></div>
        <div class="product-type-title"> <a href="<?php echo get_term_link($term)?>" class="title"><?php echo $term->name; ?> Stuff</a></div>	
		</div>
		
       <?php 
                }
            ?>
</section>


<!--  looping through Shop Product Types on front page END -->
<!--  looping through most recent journal posts on front page START -->
<section class="journal-container">
		<h1>INHABITENT JOURNAL</h1>
			<?php
				
				
				$args = array( 'post_type' => 'post', 'order' => 'DESC','orderby' => 'date','posts_per_page' => 3 );
				$journal_posts = get_posts( $args ); // returns an array of posts
			?>
			
			<?php 
				foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
			
					<div class="journal-entry">
					<div class = "journal-image"> <?php the_post_thumbnail('large'); ?></div>
					<div class="journal-info-wrapper">
						<div class="journal-date-comments"><?php the_date(); ?> / <?php comments_number(); ?></div>
						<div class="journal-title"><a href="<?php the_permalink()?>" class="title"><?php the_title(); ?></a></div>	 
						<div class="journal-read-entry"><a href="<?php the_permalink()?>" class="button">Read Entry</a></div>
					</div>
					</div>	 
			<?php endforeach; wp_reset_postdata(); ?>
</section>
			
			<!--  looping through most recent journal posts on front page END -->
			

<!--  looping through most recent Adventure posts on front page START -->
<section class="adventures-container">
		<h1>LATEST ADVENTURES</h1>
			<?php
				
				
				$args = array( 'post_type' => 'adventures', 'order' => 'DESC','orderby' => 'date','posts_per_page' => 4 );
				$adventure_posts = get_posts( $args ); // returns an array of posts
			?>
			
			<?php 
				foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
			
					<div class="adventure-entry">
						<div class = "adventure-image"> 
							<?php the_post_thumbnail('large'); ?>
						</div>
						<div class="adventure-info">
							<div class="adventure-title">
								<a href="<?php the_permalink()?>" class="title"><?php the_title(); ?></a>
							</div>	 
							<div class="adventure-read-more">
								<a href="<?php the_permalink()?>" class="button">Read More</a>
							</div>
						</div>
					</div>	 
			<?php endforeach; wp_reset_postdata(); ?>
			<div class="more-adventures"><a href="<?php home_url()?>/wordpressInhabitent/adventures" class="button">MORE ADVENTURES</a>
			</div>
</section>
<!--  looping through most recent Adventure posts on front page END -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
