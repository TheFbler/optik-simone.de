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
    <meta name="google-site-verification" content="" />

    <title>Optik Simone</title>

    <script src="https://kit.fontawesome.com/e8ddae4d2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/masonry.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
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
                  data-src="img/slideshow1.png"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/slideshow2.png"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/slideshow3.png"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/slideshow4.png"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/slideshow5.png"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/slideshow1.png"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/slideshow3.png"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/slideshow5.png"
                  alt=""
                  title=""/>
          </div>
          <div class="brick">
            <img  class="lazyload"
                  data-src="img/slideshow4.png"
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
