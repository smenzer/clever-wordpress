<!doctype html>
<html class="h-100" <?php language_attributes(); ?>>

<head>
  <!-- page title -->
  <title><?php echo trim(wp_title('', false, 'right') ?: 'Latest News'); ?> :: ID5</title>
  <!-- meta data -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
  <link rel="manifest" href="/favicon/site.webmanifest">
  <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#1c307e">
  <link rel="shortcut icon" href="/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#1c307e">
  <meta name="msapplication-config" content="/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Tag Manager -->
  <script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MLXMBSW');
  </script>

  <!-- Zoho Marketing Hub -->
  <script src="/js/zma.js"></script>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head(); ?>
</head>

<body class="d-flex flex-column h-100 <?php echo implode(' ', get_body_class()); ?>">
  <header class="id5-master-header">
    <div id="id5-navbar" class="container-fluid">
      <div class="container-fluid id5-nav-container">
        <div class="id5-nav row">
          <div class="id5-main-logo"><a href="/"><img src="/_nuxt/img/id5-logo-horizontal.97af9f3.svg" alt="ID5"></a></div>
          <div class="id5-nav-area">
            <ul class="id5-nav-ul"><a href="/about">
                <li class="id5-nav-list id5-nav-menu-item">about</li>
              </a> <a href="/solutions">
                <li class="id5-nav-list id5-nav-menu-item">solutions</li>
              </a> <a href="/resources">
                <li class="id5-nav-list id5-nav-menu-item">resources</li>
              </a> <a href="/partners">
                <li class="id5-nav-list id5-nav-menu-item">partners</li>
              </a> <a href="https://id5.io/news">
                <li class="id5-nav-list id5-nav-menu-item">news</li>
              </a> <a href="/contact">
                <li class="id5-nav-list id5-nav-menu-item">contact</li>
              </a>
              <div class="id5-login-container rounded"><a href="https://console.id5.io">
                  <li class="id5-nav-list id5-login-item">login</li>
                </a></div>
            </ul>
          </div>
          <nav id="id5-mobile-nav-container" class="navbar id5-nav bg-light fixed-top navbar-light navbar-expand-md">
            <div class="container-fluid">
              <div class="id5-mobile-logo-container"><a href="/" target="_self" class="navbar-brand"><img src="/_nuxt/img/id5-logo-horizontal.97af9f3.svg" height="50" alt="ID5"></a></div>
              <div id="id5-hamburger-menu-toggle"><button type="button" aria-label="Toggle navigation" onclick='this.classList.toggle("opened"),this.setAttribute("aria-expanded",this.classList.contains("opened"))' class="navbar-toggler id5-hamburger-menu"><svg width="50" height="50" viewBox="0 0 100 100">
                    <path d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" class="line line1"></path>
                    <path d="M 20,50 H 80" class="line line2"></path>
                    <path d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" class="line line3"></path>
                  </svg></button></div>
              <div id="id5-navbar-toggler" class="navbar-collapse collapse" style="display:none">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item id5-mobile-menu-item"><a href="/about" target="_self" class="nav-link">about</a></li>
                  <li class="nav-item id5-mobile-menu-item"><a href="/solutions" target="_self" class="nav-link">solutions</a></li>
                  <li class="nav-item id5-mobile-menu-item"><a href="/resources" target="_self" class="nav-link">resources</a></li>
                  <li class="nav-item id5-mobile-menu-item"><a href="/partners" target="_self" class="nav-link">partners</a></li>
                  <li class="nav-item id5-mobile-menu-item"><a href="https://id5.io/news" target="_self" class="nav-link">news</a></li>
                  <li class="nav-item id5-mobile-menu-item"><a href="/contact" target="_self" class="nav-link">contact</a></li>
                </ul> <a href="https://console.id5.io" class="nav-link id5-mobile-login-btn">login</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <main class="flex-shrink-0 id5-page-wrapper">