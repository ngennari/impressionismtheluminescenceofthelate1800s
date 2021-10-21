<?php
/**
 * The template for displaying all pages
 *
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Impressionism:_the_luminescence_of_the_late_1800\'s
 */

get_header();
?> 



	
		<?php
		while ( have_posts() ) :
			the_post(); ?>

			
<?php the_title(); ?>
<?php the_content(); ?>
<?php the_post_thumbnail(); ?> 

<?php
   // get the link to the most recent post
   $homelink_query = new WP_Query('post_type=post&posts_per_page=1');
   while ($homelink_query->have_posts()) : $homelink_query->the_post();
   ?>
   <a class="button" href="<?php the_permalink() ?>">Start Here</a>
   <?php
   endwhile;
   wp_reset_postdata();
   ?>

			

		<?php endwhile; // End of the loop.
		?>

	

<?php
get_sidebar();
get_footer(); ?>
