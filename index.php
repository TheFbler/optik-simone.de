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

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
  </head>

  <body>
    <i onclick="topFunction()" id="backToTopBtn" class="fas fa-chevron-circle-up"></i>
    <!-- Header per PHP einfügen -->
    <?php echo file_get_contents("parts/header.html"); ?>

    <!-- HOME -->
    <section id="home">
      <div id="slideshow">
        <?php
          $ff = file('config/parameters.txt');  //Parameter auslesen
          foreach($ff as $key=>$value) {
            $ffe = explode("=", $value);//Wert vor und nach = auslesen
            $ffa[$ffe[0]]=$ffe[1];//Key Value Paar in assozitivem Array speichern
          }

          if(trim($ffa["importantnewsbox"]) == "true") {
            include("importantNewsBox.php");
          }
        ?>
      </div>
    </section>

    <!-- LEISTUNGEN -->

    <section id="leistungen">
      <h3 class="centerText">LEISTUNGEN</h3>
      <hr/>
      <h4 class="centerText">Spiegelauer Brillenwerkstatt - echtes Brillenhandwerk für besten Durchblick</h4>
      <ul>
        <li>
          <div class="leistungBox centerText">
            <i class="leistungIcon fas fa-glasses"></i>
            <p>Brillen</p>
          </div>
          <div class="leistungBoxContent">
            <p>In unserem Geschäft finden Sie eine vielfältige Auswahl an Fassungsmodellen,
            die mit modernster Glastechnologie individuell für Sie angepasst und gefertigt werden.</p>
          </div>
        </li>
        <li>
          <div class="leistungBox centerText">
            <i class="leistungIcon fas fa-eye"></i>
            <p>Kontaktlinsen</p>
          </div>
          <div class="leistungBoxContent">
            <p>Für Ihre Kontaktlinsen führen wir nach der Anpassung regelmäßig Sitz- und Stärkekontrollen durch.</p>
          </div>
        </li>
        <li>
          <div class="leistungBox centerText">
            <i class="leistungIcon fas fa-car"></i>
            <p>Führerscheinsehtest</p>
          </div>
          <div class="leistungBoxContent">
            <p>Wir führen für Sie als amtlich anerkannte Stelle den Führerscheinsehtest für die Klassen
            A, A1, A2, B, BE, AM, L und T durch.</p>
          </div>
        </li>
        <li>
          <div class="leistungBox centerText">
            <i class="leistungIcon fas fa-camera-retro"></i>
            <p>Passbilder</p>
          </div>
          <div class="leistungBoxContent">
            <p>Bei uns können Sie Ihre biometrischen Passbilder und Bewerbungsfotos sofort mitnehmen.</p>
          </div>
        </li>
        <li>
          <div class="leistungBox centerText">
            <i class="leistungIcon fas fa-comments"></i>
            <p>Beratung</p>
          </div>
          <div class="leistungBoxContent">
            <p>Bei kundenorientierter Beratung können Sie ohne Zeitdruck im einladenden Ambiente aus
            der vielfältigen Auswahl Ihre Wohlfühlbrille entdecken.</p>
          </div>
        </li>
        <li>
          <div class="leistungBox centerText">
            <i class="leistungIcon fas fa-tools"></i>
            <p>Reparaturen</p>
          </div>
          <div class="leistungBoxContent">
            <p>In unserer hauseigenen Werkstatt werden Reparaturen schnell und zuverlässig durchgeführt.
            Zudem werden Batteriewechsel (z.B. bei Uhren) am selben Tag erledigt.</p>
          </div>
        </li>
      </ul>
    </section>

    <!-- HISTORIE -->

    <section id="historie">
      <h3 class="centerText">HISTORIE</h3>
      <hr/>
      <div class="timeline">
        <div class="container left">
          <div class="content">
            <h2>1990</h2>
            <p>Eröffnung des Augenoptikfachgeschäfts von Herrn Gunther Walter in Spiegelau</p>
          </div>
        </div>
        <div class="container right">
          <div class="content">
            <h2>1994</h2>
            <p>Abschluss meiner Lehre bei Optik Walter mit der Gesellenprüfung in München</p>
          </div>
        </div>
        <div class="container left">
          <div class="content">
            <h2>1998</h2>
            <p>Meisterprüfung im Augenoptikerhandwerk in Kassel mit Auszeichnung der Privatschule für Augenoptik in Karlsruhe</p>
          </div>
        </div>
        <div class="container right">
          <div class="content">
            <h2>2000</h2>
            <p>Übernahme der Betriebsleitung für die Filiale von Optik Walter in Spiegelau</p>
          </div>
        </div>
        <div class="container left">
          <div class="content">
            <h2>2020</h2>
            <p>Ein Traum wird wahr: Der Schritt in die Selbstständigkeit mit Optik Simone nach 22 Jahren Erfahrung als Augenoptikmeisterin</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
      <h3 class="centerText">ÜBER UNS</h3>
      <hr/>
      <ul class="anordnungAbout">
        <li id="aboutImg1">
          <img class="lazyload" alt="Der Laden" src="img/der_laden.jpg"/>
        </li><!-- Fix white space between blocks
        --><li id="aboutP1">
          <h2 class="centerText">Der Laden</h2>
          <div class="alignmentOfP"><p class="centerText aboutText"><?php echo file_get_contents("texts/about1.txt"); ?></p></div>
        </li>
      </ul>
      <ul class="anordnungAbout">
        <li id="aboutP2">
          <h2 class="centerText">Die Chefin</h2>
          <div class="alignmentOfP"><p class="centerText aboutText"><?php echo file_get_contents("texts/about2.txt"); ?></p></div>
        </li><!-- Fix white space between blocks
        --><li id="aboutImg2">
          <img class="lazyload" alt="Die Chefin" src="img/die_chefin.jpg"/>
        </li>
      </ul>
    </section>

    <!-- CONTACT -->
    <section class="centerText" id="contact">
      <h3>KONTAKT</h3>
      <hr/>
        <ul id="contactAufteilung">
          <li>
            <ul id="contactinfo">
              <li>
                <h2>Öffnungszeiten:</h2><br/>
                <p>Montag - Freitag:<br/>
                09:30 - 12:30<br/>
                14:00 - 18:00<br/>
                <br/></p>
                <p>Samstag:<br/>
                09:30 - 12:00</p>
              </li><!-- Fix white space between blocks
              --><li>
                <h2>Anschrift:</h2><br/>
                <p>Hauptstr. 13<br/>
                94518 Spiegelau</p>
              </li><!-- Fix white space between blocks
              --><li>
                <h2>Telefon:</h2><br/>
                <p><a href="tel:085536463">08553 / 6463</a></p>
              </li><!-- Fix white space between blocks
              --><li>
                <h2>E-Mail:</h2><br/>
                <p><a href="mailto:info@optik-simone.de">info@optik-simone.de</a></p>
              </li>
            </ul>
          </li>
          <li>
            <?php
            if(!empty($_POST["sendMail"])) {
              if(isset($_POST['g-recaptcha-response'])){
                $captcha=$_POST['g-recaptcha-response'];
              }
              if(!$captcha){
                $message = "Bitte beachten Sie das Captcha!";
                $type = "errorContact";
              } else {//Wenn das Captcha geklickt wurde weiter prüfen
                $ff = file('config/parameters.txt');  //Secret Key nicht im Repo speichern
                foreach($ff as $key=>$value) {
                  $ffe = explode("=", $value);//Wert vor und nach = auslesen
                  $ffa[$ffe[0]]=$ffe[1];//Key Value Paar in assozitivem Array speichern
                }

                $secretKey = $ffa["captchasecretkey"];//Secret Key auslesen
                // post request to server
                $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                $response = file_get_contents($url);
                $responseKeys = json_decode($response,true);
                // should return JSON with success as true
                if($responseKeys["success"]) {
                  $name = $_POST["userName"];
                  $email = $_POST["userEmail"];
                  $content = $_POST["content"];

                  $toEmail = "info@optik-simone.de";
                  $mailHeaders = "From: " . $name . "<". $email .">\r\n";
                  if(mail($toEmail, "Kontaktformular: Anfrage von " . $_POST["userName"], $content, $mailHeaders)) {
                      $message = "Anfrage wurde erfolgreich gesendet!";
                      $type = "successContact";
                  }
                } else {
                  $message = "Anfrage konnte nicht gesendet werden!";
                  $type = "errorContact";
                }
              }
            }
            require_once "contact.php";
            ?>
          </li>
        </ul>

        <div id="googlemaps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.0880339270648!2d13.360240315595057!3d48.913714979292926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4774e081e2797199%3A0xc306ecdf125206d9!2sHauptstra%C3%9Fe%2013%2C%2094518%20Spiegelau!5e0!3m2!1sde!2sde!4v1586096352777!5m2!1sde!2sde"
                  width="100%"
                  height="500"
                  frameborder="0"
                  style="border:0;"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                  title="Lage von Optik Simone"></iframe>
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
