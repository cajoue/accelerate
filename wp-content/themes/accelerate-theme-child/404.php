<?php
/**
 * The template for displaying 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<?php get_header(); ?>

<!-- 404 Hero -->
<section class="comic-hero">
  <div class="comic-text">
    <h2>
      <span class="comic-red">What </span>
      <span class="comic-blue">the </span>
      <span class="comic-magenta">Comic </span>
      <span class="comic-green">Sans</span>
      <span class="comic-red">?</span>
      <span class="comic-blue">* &#127845;</span>
      <span class="comic-magenta">&iquest;</span>
      <span class="comic-green">&#128165; !</span>
    </h2>
  </div>
  <div class="comic-404">
    <span>4</span>
    <span>0</span>
    <span>4</span>
  </div>
  <div class="comic-text">
    <p>
      <span class="comic-red">Page </span>
      <span class="comic-blue">not  </span>
      <span class="comic-magenta">found </span>
    </p>
  </div>
</section><!-- .comic-hero -->

<div class="site-content">
  <!-- Intro of Services -->
  <section class="comic-redirect">

    <h2>Ooops, nothing to see here!</h2>
    <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
    <p>As you're here, feel free to take a look at our <a href="<?php echo home_url(); ?>/blog">blog</a> and our (ahem, more gorgeous) <a href="<?php echo home_url(); ?>/case-studies">featured work</a>.</p>
    <p>If you wish to inform us about the missing link (??) you can <a href="<?php echo home_url(); ?>/contact-us">Contact Us</a>.</p>
</section><!-- .about-services -->

</div><!-- .site-content -->

<?php get_footer(); ?>