<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<section class="about-page">
  <div class="site-content">
    <div id="content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="about-hero">
              <?php the_content(); ?>
      </div>
      <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
  </div><!-- .site-content -->
</section><!-- .about-page -->

<?php get_footer(); ?>