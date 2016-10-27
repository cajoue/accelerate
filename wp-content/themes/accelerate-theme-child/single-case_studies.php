<?php
/**
 * The template for displaying single case studies.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">
      <?php while ( have_posts() ) : the_post();
        $size = "full";
        $services = get_field( "services" );
        $clients = get_field( "clients" );
        $link = get_field( "site_link" );
        $image_1 = get_field ( "image_1" );
        $image_2 = get_field ( "image_2" );
        $image_3 = get_field ( "image_3" );
      ?>
      <article class="case-study">
        <aside class="case-study-sidebar">
          <h1> <?php the_title(); ?> </h1>
          <h2> <?php echo $services; ?> </h2>
          <h3>Client: <?php echo $clients; ?> </h3>

          <?php the_content(); ?>

          <p><a href="<?php echo $link; ?>">Visit Live Site</a></p>
        </aside>

        <div class="case-study-images">
          <?php if ($image_1) { ?>
            <p><?php echo wp_get_attachment_image( $image_1, $size ); ?></p>
          <?php } ?>
          <?php if ($image_2) { ?>
            <p><?php echo wp_get_attachment_image( $image_2, $size ); ?></p>
          <?php } ?>
          <?php if ($image_3) { ?>
            <p><?php echo wp_get_attachment_image( $image_3, $size ); ?></p>
          <?php } ?>
        </div>
      </article>

      <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>