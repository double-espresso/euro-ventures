<?php
/**
 * Template Name: About
 */
?>

<?php get_header(); ?>
<?php wp_reset_postdata(); ?>
  <section class="hero" id="section1">
      <div class="row">
        <div class="large-8 large-offset-2 columns">
          <h1><?php the_title(); ?></h1>
        </div>
      </div> 
    </section>

    <div class="page-container">
      <div class="row">
        <div class="large-centered-8 columns">
          <div class="info-cont">
            <h2>Investing in US Growth</h2>
            <div><?php the_content(); ?></div>
            <button class="button-primary"><span>Contact us</span></button>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>