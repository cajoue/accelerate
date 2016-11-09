<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
</section><!-- .home-page -->

<div class="site-content">

  <section class="featured-work">
      <h4>Featured Work</h4>
      <ul class="homepage-featured-work">
      <?php query_posts('posts_per_page=3&post_type=case_studies'); // 3 posts type case-studies ?>
        <?php while ( have_posts() ) : the_post(); // the loop
          $size = "medium";
          $image_1 = get_field ( "image_1" );?>
          <!-- loop content here -->
          <li class="individual-featured-work">
            <figure>
              <?php if ($image_1) { ?>
                <?php echo wp_get_attachment_image( $image_1, $size ); ?>
              <?php } ?>
            </figure>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </li>
        <?php endwhile; // end the loop ?>
      <?php wp_reset_query(); // return the query object to wp control ?>
  </section><!-- .featured-work -->

<!-- recent posts includes latest post and latest tweet -->
  <section class="recent-posts">

    <div class="blog-post">
      <h4>From the Blog</h4>
      <?php query_posts('posts_per_page=1'); // override the default query object ?>
        <?php while ( have_posts() ) : the_post(); // the loop ?>
          <!-- loop content here -->
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          <a class="read-more-link" href="<?php the_permalink(); ?>">Read more <span>&rsaquo;</span></a>
        <?php endwhile; // end the loop ?>
      <?php wp_reset_query(); // return the query object to wp control ?>
    </div>

    <div class="single-tweet">
      <?php if ( is_active_sidebar( 'sidebar-2' ) ) :
        $twitter_name = get_field ( "twitter_name" ); ?>

      <h4>Recent Tweet</h4>
      <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
      </div>
        <a class="follow-link" href="https://twitter.com/intent/follow?screen_name=<?php echo $twitter_name; ?>">Follow Us <span>&rsaquo;</span></a>
      <?php endif; ?>
    </div>

  </section><!-- .recent-posts -->

</div><!-- .site-content -->

<?php get_footer(); ?>