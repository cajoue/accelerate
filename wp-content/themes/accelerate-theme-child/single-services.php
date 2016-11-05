<?php
/**
 * The template for displaying single services.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">
      <?php while ( have_posts() ) : the_post();
        $size = "medium";
        $image_1 = get_field ( "image_1" );
      ?>
      <article class="service">
        <div class="service-image">
          <?php if ($image_1) { ?>
            <?php echo wp_get_attachment_image( $image_1, $size ); ?>
          <?php } ?>
        </div>

        <div class="service-content">
          <h2> <?php the_title(); ?> </h2>
          <?php the_content(); ?>
        </div>
      </article>

      <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>