<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<!-- About Hero -->
<section class="about-page">
	<div class="site-content">

		<?php while ( have_posts() ) : the_post();
			$hero_text_highlight = get_field ("hero_text_highlight");
			$hero_text = get_field ("hero_text");?>

			<div class="about-hero">
				<h2>
					<span><?php echo $hero_text_highlight; ?> </span>
					<?php echo $hero_text; ?>
				</h2>
			</div>

		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .about-page -->

<!-- Intro of Services -->
<section class="about-services">
	<div class="site-content">

		<?php while ( have_posts() ) : the_post();
			$intro_title = get_field('intro_title');?>

			<h4><?php the_field('intro_title'); ?></h4>
			<p> <?php the_content(); ?></p>

		<?php endwhile; //end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-services -->

<!-- List of Services -->
<section class="about-services-list">
	<div class="site-content">
		<?php query_posts('posts_per_page=4&post_type=services'); ?>

		<?php while ( have_posts() ) : the_post();
			$size = "medium";
			$image_1 = get_field ( "image_1" );?>

			<article class="service">
				<div class="service-image">
					<?php echo wp_get_attachment_image($image_1, $size); ?>
				</div>

				<div class="service-content">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
			</article> <!-- .about-services-posts -->

		<?php endwhile; //end of the loop. ?>
		<?php wp_reset_query(); // resets the altered query back to the original ?>
	</div><!-- .site-content -->
</section><!-- .about-services-list -->


<?php get_footer(); ?>