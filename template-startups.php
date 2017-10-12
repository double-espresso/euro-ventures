<?php
/**
 * Template Name: Startups
 */
?>
<?php
  $startup_relation = get_sub_field('team');
?>
<?php get_header(); ?>
<?php wp_reset_postdata(); ?>
  <section class="hero" id="section2">
    <div class="row">
      <div class="large-8 large-offset-2 columns">
        <h1><?php the_title(); ?></h1>
      </div>
    </div> 
  </section>

  <?php if(have_rows('startup')): ?>
    <?php while (have_rows('startup')): the_row(); ?>
      <section class="section-startup">
        <div class="row">
          <div class="small-6 small-centered medium-4 large-3 large-uncentered large-offset-1 columns">
            <div class="startup-img">
              <img src="<?php the_sub_field('logo') ?>">
            </div>
          </div>
          <div class="small-centered-8 medium-centered-4 large-6 columns">
            <div class="info-cont">
              <h3><?php the_sub_field('title') ?></h3>
              <div><?php the_sub_field('content') ?></div>
              <div class="button-default"><a href="<?php the_sub_field('url') ?>" class="button-primary"><span>Learn More</span></a></div>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>