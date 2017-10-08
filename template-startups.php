<?php
/**
 * Template Name: Startups
 */
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

    <section class="section-startup">
      <div class="row">
        <div class="small-centered-8 medium-centered-8 large-3 columns">
          <div class="startup-img">
            <img src="../img/startups-page/akselos.jpg">
          </div>
        </div>
        <div class="small-centered-8 medium-centered-8 large-6 columns">
          <div class="info-cont">
            <h3>Akselos</h3>
            <p>Akselos has developed a revolutionary new type of engineering simulation technology. The underlying technology enables an increase in simulation speed of 1’000 to 10’000, compared to the best-in-class CAE software used by engineers today, while preserving accuracy to within 1% of FEA results. Thus, in fact largely leapfrogging FEA accuracy!

            Hundreds of engineers in the mining, power-generation, and oil and gas industries are now using the software. Akselos is also providing software for an MITx course on structural engineering.

            Akselos enables engineers to design and assess critical infrastructure via advanced simulation software. They focus on making powerful, highly-customized simulation tools.

            Commercially, Akselos is expanding, hiring more employees in its five branches — in Switzerland, Boston, Vietnam, Chile and Germany — building a community of users, and planning to continue its involvement with the academia. </p>
            <h5>Contact</h5>
            <p>Address:<br>
            Headquarters<br>
            EPFL Innovation Park, Building D<br>
            1015 Lausanne, Switzerland<br>
            <br>
            Email: info@akselos.com</p>
            <div class="button-default"><a href="#" class="button-primary"><span>Learn More</span></a></div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>