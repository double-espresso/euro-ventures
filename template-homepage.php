<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>
<?php wp_reset_postdata(); ?>
    <section class="cd-section" id="section1">
      <div class="row">
        <div class="large-10 columns">
          <h1><?php the_field('section_1_title'); ?></h1>
          <div class="button-default"><a href <?php the_field('section_1_page_link') ?>class="button-secondary"><span><?php the_field('section_1_button_label') ?></span></a></div>
        </div>
          <!-- <div class="mouse"><span></span></div> -->
      </div> 
    </section>

    <section class="cd-section" id="section2">
      <div class="row">
        <div class="large-6 columns">
          <h1><?php the_field('section_2_title'); ?></h1>
          <div class="button-default"><a href <?php the_field('section_2_page_link') ?>class="button-secondary"><span><?php the_field('section_2_button_label') ?></span></a></div>
        </div>
        <div class="basso small-6 medium-6 large-3 columns ">
          <figure class="startup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup_1.jpg"/>
              <figcaption>
              <p>Ava AG is developing a wearable medical device which monitors the menstrual cycle of women in order to precisely indicate fertile days and thus facilitate family planning.</p>
              <span>Learn more</span>
              </figcaption><a href="meet-our-startups.html"></a>
          </figure>
          <figure class="startup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup_2.jpg"/>
              <figcaption>
              <p>Ava AG is developing a wearable medical device which monitors the menstrual cycle of women in order to precisely indicate fertile days and thus facilitate family planning.</p>
              <span>Learn more</span>
              </figcaption><a href="#"></a>
          </figure>
          <figure class="startup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup_3.jpg"/>
              <figcaption>
              <p>Ava AG is developing a wearable medical device which monitors the menstrual cycle of women in order to precisely indicate fertile days and thus facilitate family planning.</p>
              <span>Learn more</span>
              </figcaption><a href="#"></a>
          </figure>
        </div>
        <div class="small-6 medium-6 large-3 columns">
          <figure class="startup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup_4.jpg"/>
              <figcaption>
              <p>Ava AG is developing a wearable medical device which monitors the menstrual cycle of women in order to precisely indicate fertile days and thus facilitate family planning.</p>
              <span>Learn more</span>
              </figcaption><a href="#"></a>
          </figure>
          <figure class="startup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup_5.jpg"/>
              <figcaption>
              <p>Ava AG is developing a wearable medical device which monitors the menstrual cycle of women in order to precisely indicate fertile days and thus facilitate family planning.</p>
              <span>Learn more</span>
              </figcaption><a href="#"></a>
          </figure>
          <figure class="startup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/startup/startup_6.jpg"/>
              <figcaption>
              <p>Ava AG is developing a wearable medical device which monitors the menstrual cycle of women in order to precisely indicate fertile days and thus facilitate family planning.</p>
              <span>Learn more</span>
              </figcaption><a href="#"></a>
          </figure>
        </div>
      </div> 
    </section>

    <section class="cd-section" id="section3">
      <div class="row">
        <div class="large-4 columns">
          <h1><?php the_field('section_3_title'); ?></h1>
          <div class="button-default"><a href <?php the_field('section_3_page_link') ?>class="button-secondary"><span><?php the_field('section_3_button_label') ?></span></a></div>
        </div>
        <div class="small-3 medium-3 large-2 columns">
          <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/lucian-wagner.jpg">
              <div class="card-section">
                <p>Lucian Wagner</p>
              </div>
          </div>
        </div>
        <div class="basso small-3 small-2 medium-3 large-2 columns">
          <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/vincent-titolo.jpg">
              <div class="card-section">
                <p>Vincent Titolo</p>
              </div>
          </div>
        </div>
        <div class="small-3 medium-3 large-2 columns">
          <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/jan-nygren.jpg">
              <div class="card-section">
                <p>Jan Nygren</p>
              </div>
          </div>
        </div>
        <div class="basso small-3 medium-3 large-2 columns">
          <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/matthew-hua.jpg">
              <div class="card-section">
                <p>Matthew Hua</p>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cd-section" id="section4">
      <div class="row">
        <div class="large-6 columns">
          <h1><?php the_field('section_4_title'); ?></h1>
          <div class="button-default"><a href <?php the_field('section_4_page_link') ?>class="button-secondary"><span><?php the_field('section_4_button_label') ?></span></a></div>
        </div>
        <div class="large-5 columns">
          <div class="mappa">
            <div class="info-map">
              <h3>Euro US Ventures AG</h3>
              <p>Dolderstrasse 14<br>
                  8032 Zürich, Switzerland<br>
                  +41 44 991 62 57</p>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/office/map-zurich.jpg">
          </div>
        </div>
      </div>
    </section>

    <section class="cd-section" id="section5">
      <div class="row">
        <div class="large-6 columns">
          <h1><?php the_field('section_5_title'); ?></h1>
          <div class="button-default"><a href <?php the_field('section_5_page_link') ?>class="button-secondary"><span><?php the_field('section_5_button_label') ?></span></a></div>
        </div>
        <div class="large-5 columns">
          <div class="mappa">
            <div class="info-map">
              <h3>Euro US Ventures LLC</h3>
              <p>2000 Commonwealth Avenue, Suite 300<br>
                  Newton, MA 02466 USA<br>
                  +1 (617) 244-2300</p>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/office/map-boston.jpg">
          </div>
        </div>
      </div>
    </section>

    <section class="cd-section" id="section6">
      <div class="row">
        <div class="large-6 columns">
          <h1><?php the_field('section_6_title'); ?></h1>
        </div>

        <div class="small-8 small-centered medium-6 large-4 large-offset-2 large-uncentered columns">
          
          <div class="med">
            <div class="media">
              <div class="content-media">
                  <h5>Partner</h5>
                  <span>PARTNER’S NAME</span>
                  <p>This text will be centered against the image, regardless of image size or copy length.</p>
              </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/test-logo.jpg" />
            </div>

            <div class="media">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/test-logo.jpg" />
                <div class="content-media">
                  <h5>Partner</h5>
                  <span>PARTNER’S NAME</span>
                  <p>This text will be centered against the image, regardless of image size or copy length.</p>
                </div>
            </div>

            <div class="media">
              <div class="content-media">
                  <h5>Partner</h5>
                  <span>PARTNER’S NAME</span>
                  <p>This text will be centered against the image, regardless of image size or copy length.</p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/test-logo.jpg" />
            </div>
          </div>


        </div>

      </div>
    </section><!-- cd-section -->

    <section class="cd-section" id="section7">
      <div class="row">
        <div class="large-6 columns">
          <h1><?php the_field('section_7_title'); ?></h1>
        </div>
        <div class="large-6 columns">
          
          <div class="form-container">
            <div class="title-form"><span>Send us a message</span></div>
            <div class="content-form header-form"></div>
            <div class="content-form body">
              <form action="#">
                <ul>
                  
                  <li>
                    <p class="left">
                      <label for="first_name">Name<span class="req">*</span></label>
                      <input type="text" name="first_name" placeholder=" " />
                    </p>
                    <p class="pull-right">
                      <label for="last_name">Email<span class="req">*</span></label>
                      <input type="text" name="last_name" placeholder=" " />      
                    </p>
                  </li>

                  <li>
                    <p class="left">
                      <label for="first_name">Subject</label>
                      <input type="text" name="first_name" placeholder=" " />
                    </p>
                    <p class="pull-right">
                      <label for="last_name">Phone</label>
                      <input type="text" name="last_name" placeholder=" " />      
                    </p>
                  </li>

                  <li>
                    <label for="comments">Your Message</label>
                    <textarea cols="46" rows="3" name="comments"></textarea>
                  </li>
                  <span class="disclaimer"><span class="req">*</span>All fields marked are required.</span>
                  <li>
                    <input class="btn btn-submit" type="submit" value="Send" />
                    
                  </li>
                  
                </ul>
              </form>  
            </div>
          </div>

        </div>
      </div>
    </section><!-- cd-section -->
<?php get_footer(); ?>