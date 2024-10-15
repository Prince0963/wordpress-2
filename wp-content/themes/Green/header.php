<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Green Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  <!-- Main CSS File -->
  <!-- <link href="assets/css/main.css" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: Green
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <?php wp_head(); ?>
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <?php if (get_theme_mod('topbar') == 1) { ?>

      <div class="topbar d-flex align-items-center accent-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="<?php echo get_theme_mod('top_email') ?>"><?php echo get_theme_mod('top_email') ?></a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo get_theme_mod('top_mobile') ?></span></i>
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <?php if ($twitter_url = get_theme_mod('twitter_url')) : ?><a href="<?php echo esc_url($twitter_url); ?>" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <?php endif; ?>
            <?php if ($facebook_url = get_theme_mod('facebook_url')) : ?> <a href="<?php echo esc_url($facebook_url); ?>" class="facebook"><i class="bi bi-facebook"></i></a>
            <?php endif; ?>
            <?php if ($instagram_url = get_theme_mod('instagram_url')) : ?> <a href="<?php echo esc_url($instagram_url); ?>" class="instagram"><i class="bi bi-instagram"></i></a>
            <?php endif; ?>
            <?php if ($linkedin_url = get_theme_mod('linkedin_url')) : ?> <a href="<?php echo esc_url($linkedin_url); ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <?php endif; ?>

          </div>
        </div>
      </div><!-- End Top Bar -->

    <?php } ?>

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <!-- <a href="index.html" class="logo d-flex align-items-center"> -->
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <!-- <h1 class="sitename">Green</h1> -->
        <!-- </a> -->

        <!-- logo here -->
        <?php

        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if (has_custom_logo()) {
          echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
        } else {
          echo '<h1>' . get_bloginfo('name') . '</h1>';
        }

        ?>

        <!-- Menu Header Dynamic -->

        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => 'nav',
          'container_class' => 'navmenu',
          'container_id' => 'navmenu',

        ))
        ?>


        <!-- <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Team</a></li>
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav> -->

      </div>

    </div>

  </header>