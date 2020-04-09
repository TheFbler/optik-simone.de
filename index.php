<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
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
    <link href="img/logo_favi.ico" type="image/x-icon"> 
    <link rel="shortcut icon" href="img/logo_favi.ico" type="image/x-icon">
  </head>

  <body>
    <i onclick="topFunction()" id="backToTopBtn" class="fas fa-chevron-circle-up"></i>
    <!-- Header per PHP einfügen -->
    <?php echo file_get_contents("parts/header.html"); ?>

    <!-- HOME -->
    <section id="home">
      <div id="slideshow"></div>
    </section>

    <!-- ABOUT -->
    <section id="about">
      <h3 class="centerText">ÜBER UNS</h3>
      <hr/>
      <ul class="anordnungAbout">
        <li><img src="https://via.placeholder.com/600x400.png"/></li>
        <li>
          <h2 class="centerText">Der Laden</h2>
          <p><?php echo file_get_contents("texts/about1.txt"); ?></p></li>
      </ul>
      <br style="clear: both;"/>
      <ul class="anordnungAbout">
        <li>
          <h2 class="centerText">Die Chefin</h2>
          <p><?php echo file_get_contents("texts/about2.txt"); ?></p>
        </li>
        <li>
          <img src="https://via.placeholder.com/600x400.png"/>
        </li>
      </ul>
    </section>

    <!-- CONTACT -->
    <section class="centerText" id="contact">
      <h3>KONTAKT</h3>
      <hr/>
      <ul id="anordnung">
        <li>
          <ul id="contactinfo">
            <li>
              <h2>Öffnungszeiten:</h2><br/>
              <p>Montag - Freitag:<br/>
              09:00 - 13:00<br/>
              14:00 - 18:00<br/>
              <br/></p>
              <p>Samstag:<br/>
              09:00 - 12:00</p>
            </li>
            <li>
              <h2>Telefon:</h2><br/>
              <p>08553 / 6463</p>
            </li>
            <li>
              <h2>Anschrift:</h2><br/>
              <p>Hauptstr. 13<br/>
              94518 Spiegelau</p>
            </li>
            <li>
              <h2>E-Mail:</h2><br/>
              <p>info@optik-simone.de</p>
            </li>
          </ul>
        </li>
        <li id="googlemaps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.0880339270648!2d13.360240315595057!3d48.913714979292926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4774e081e2797199%3A0xc306ecdf125206d9!2sHauptstra%C3%9Fe%2013%2C%2094518%20Spiegelau!5e0!3m2!1sde!2sde!4v1586096352777!5m2!1sde!2sde"
                  width="90%"
                  height="500"
                  frameborder="0"
                  style="border:0;"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"></iframe>
        </li>
      </ul>
    </section>

    <!-- Footer per PHP einfügen -->
    <?php echo file_get_contents("parts/footer.html"); ?>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
