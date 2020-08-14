<!DOCTYPE html>
<html lang="de">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Optik Simone - Spiegelauer Brillenwerkstatt" />
    <meta name="keywords" content="Optik, Simone, Trauner, Brillenwerkstatt, Spiegelau, Handwerk, Brille, Kontaktlinsen" />
    <meta property="og:title" content="Optik Simone" />
    <meta property="og:image" content="img/landing.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Optik Simone" />
    <meta name="google-site-verification" content="bqemPz2fY5lZdMk8Yj3KKEGEJLGUhs0MBWIoTmwiFW4" />

    <title>Optik Simone</title>

    <script src="https://kit.fontawesome.com/e8ddae4d2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/masonry.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png?v=alJlkBqe0o">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png?v=alJlkBqe0o">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png?v=alJlkBqe0o">
    <link rel="manifest" href="/img/favicon/site.webmanifest?v=alJlkBqe0o">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg?v=alJlkBqe0o" color="#000000">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico?v=alJlkBqe0o">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml?v=alJlkBqe0o">
    <meta name="theme-color" content="#ffffff">
  </head>

  <body>
    <i onclick="topFunction()" id="backToTopBtn" class="fas fa-chevron-circle-up"></i>
    <!-- Header per PHP einfügen -->
    <?php echo file_get_contents("parts/header.html"); ?>

    <!-- Gallery -->
    <section id="gallery">
      <h3 class="centerText">GALERIE</h3>
      <hr/>
      <div class="masonryWrapper">
        <div class="masonry">
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/gallery/gallery1.jpg"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/gallery/gallery2.jpg"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/gallery/gallery3.jpg"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/gallery/gallery4.jpg"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/gallery/gallery5.jpg"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/gallery/gallery6.jpg"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/gallery/gallery7.jpg"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/gallery/gallery8.jpg"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/gallery/gallery9.jpg"
                  alt=""
                  title=""/>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer per PHP einfügen -->
    <?php echo file_get_contents("parts/footer.html"); ?>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/mobile-menu.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="js/lazysizes.min.js" async=""></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>
