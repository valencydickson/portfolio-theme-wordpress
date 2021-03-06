<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Valency Dickson" />
  <meta name="description" content="Web Developer" />
  <title>Valency Dickson</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/VD_favicon.ico" type="image/x-icon" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4RNQ6DK61G"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-4RNQ6DK61G");
  </script>

  <meta name="google-site-verification" content="SMFGt-_4YTMwhJySlSt458NBpZhZPG6j_fWSzCzSRP4" />

  <!-- AOS JS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />



  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Playfair+Display&display=swap"
    rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/51416ae4aa.js" crossorigin="anonymous"></script>

  <?php wp_head();?>
</head>

<body>
<header id="header">
    <div class="navbar">
      <a href="/" class="logo">
      <img src="<?php echo get_theme_file_uri('assets/images/logo.svg') ?>" alt="logo" />
      </a>

      <nav class="navigation">
      <?php
wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'menu-class' => 'menu-wrapper-li',
        'items_wrap' => '<ul  class="menu-wrapper">%3$s</ul>',
        'fallback_cb' => false,
    )
);
?>


      </nav>


      <!-- Contacts -->
      <div class="personal-contacts">
        <a href="mailto:dickson.valency@gmail.com">dickson.valency@gmail.com</a>
      </div>

      <!-- Navigation -->
      <button class="sidebar-toggler">
        <i class="fas fa-bars"></i>
      </button>

      <div class="sidebar">
        <div class="sidebar-header">
          <a href="index.html" class="logo">
            <img src="<?php echo get_theme_file_uri('assets/images/logo.svg') ?>" alt="logo" />
          </a>
          <button class="close-btn"><i class="fas fa-times"></i></button>
        </div>

        <nav id="toggle-nav" class="toggle-nav">
      <?php wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'menu-class' => 'menu-wrapper-li',
        'items_wrap' => '<ul  class="menu-wrapper">%3$s</ul>',
        'fallback_cb' => false,
    )
);
?>

        </nav>

        <!-- social media -->
        <div class="personal-contacts-sidebar">
          <a href="mailto:dickson.valency@gmail.com">dickson.valency@gmail.com</a>
        </div>
        <ul class="social-icons">
          <li>
            <a href="https://www.linkedin.com/in/valency-dickson-0a7754125/" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
          </li>
          <li>
            <a href="https://github.com/valencydickson" target="_blank"><i class="fab fa-github"></i></a>
          </li>
          <li>
            <a href="mailto:dickson.valency@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </header>
