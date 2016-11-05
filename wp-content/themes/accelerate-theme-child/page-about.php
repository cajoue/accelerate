<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<!-- get fields -->
<?php
	$hero_text_highlight = get_field ("hero_text_highlight");
	$hero_text = get_field ("hero_text");
	$intro_title = get_field('intro_title');
?>

<!-- About Hero -->
<section class="about-hero">
	<div class="about-text">
		<h2>
			<span><?php echo $hero_text_highlight; ?> </span>
			<?php echo $hero_text; ?>
		</h2>
	</div>
</section><!-- .about-page -->

<!-- site content -->
<div class="site-content">
	<!-- Intro of Services -->
	<section class="about-intro">
		<?php while ( have_posts() ) : the_post(); ?>
			<h4><?php echo $intro_title; ?></h4>
			<p> <?php the_content(); ?></p>
		<?php endwhile; //end of the loop. ?>
	</section><!-- .about-services -->

	<!-- List of Services -->
	<section class="about-services">

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
	</section><!-- .about-services -->

	<!-- Contact Us -->
	<section class="about-contact">

		<div class="contact-container">
			<h2>Interested in working with us?</h2>
			<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
		</div>

	</section>

</div><!-- .site-content -->

<?php get_footer(); ?>