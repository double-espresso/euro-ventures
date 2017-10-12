<!doctype html>
<!--[if lt IE 9]> <html class="no-js lt-ie10 lt-ie9" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">

    <title><?php wp_title( '//', true, 'right' ); ?> <?php echo get_bloginfo('name') ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css">

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.js"></script> <!-- Modernizr -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/foundation.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>

    <?php wp_head(); ?>

    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->

  </head>

  <header class="main_h">
    <div class="row">
      <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">EURO US VENTURES</a>

      <nav>
        <input type="checkbox" id="nav" class="hidden"/>
        <label for="nav" class="nav-open">
          <i></i><i></i><i></i>
        </label>
        <div class="nav-container">
          <?php wp_nav_menu( array( 'menu' => '', 'primary' ) ); ?>
        </div>
        <?php if(have_rows('social', 'options')): ?>
        <div class="social-links">
            <nav class="social">
              <ul>
                <?php while (have_rows('social', 'options')): the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('name'); ?>" target="_blank" class="avatar_social"><?php the_sub_field('name'); ?></a>
                  </li>
                <?php endwhile; ?>
              </ul>
            </nav>
        </div>
        <?php endif; ?>
      </nav>

      
      
    </div> <!-- / row -->
  </header>

  <nav id="cd-vertical-nav">
    <ul>
      <li>
        <a href="#section1" data-number="1">
          <span class="cd-dot"></span>
          <span class="cd-label">WHO WE ARE</span>
        </a>
      </li>
      <li>
        <a href="#section2" data-number="2">
          <span class="cd-dot"></span>
          <span class="cd-label">PORTFOLIO</span>
        </a>
      </li>
      <li>
        <a href="#section3" data-number="3">
          <span class="cd-dot"></span>
          <span class="cd-label">TEAM</span>
        </a>
      </li>
      <li>
        <a href="#section4" data-number="4">
          <span class="cd-dot"></span>
          <span class="cd-label">ZURICH</span>
        </a>
      </li>
      <li>
        <a href="#section5" data-number="5">
          <span class="cd-dot"></span>
          <span class="cd-label">BOSTON</span>
        </a>
      </li>
      <li>
        <a href="#section6" data-number="6">
          <span class="cd-dot"></span>
          <span class="cd-label">PARTNERS</span>
        </a>
      </li>
      <li>
        <a href="#section7" data-number="7">
          <span class="cd-dot"></span>
          <span class="cd-label">CONTACT</span>
        </a>
      </li>
    </ul>
  </nav>

  <a class="cd-nav-trigger cd-img-replace">Open navigation<span></span></a>