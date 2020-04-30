<!DOCTYPE html>
<html>
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

    <!-- LEISTUNGEN -->

    <section id="leistungen">
      <h3 class="centerText">LEISTUNGEN</h3>
      <hr/>
      <h4 class="centerText">Spiegelauer Brillenwerkstatt - echtes Brillenhandwerk für besten Durchblick</h4>
      <ul class="centerText">
        <li onclick="changeTextLeistung('Brillen')">
          <i class="fas fa-glasses"></i>
          <p>Brillen</p>
        </li><!--
        --><li onclick="changeTextLeistung('Kontaktlinsen')">
          <i class="fas fa-eye"></i>
          <p>Kontaktlinsen</p>
        </li><!--
        --><li onclick="changeTextLeistung('Fuehrerscheinsehtest')">
          <i class="fas fa-car"></i>
          <p>Führerscheinsehtest</p>
        </li><!--
        --><li onclick="changeTextLeistung('Passbilder')">
          <i class="fas fa-camera-retro"></i>
          <p>Passbilder</p>
        </li><!--
        --><li onclick="changeTextLeistung('Beratung')">
          <i class="fas fa-comments"></i>
          <p>Beratung</p>
        </li><!--
        --><li onclick="changeTextLeistung('Reperaturen')">
          <i class="fas fa-tools"></i>
          <p>Reparaturen</p>
        </li>
      </ul>
      <p class="centerText" id="leistungBeschreibung">Bitte wählen Sie eine Leistung für mehr Informationen!</p>
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
            <p>Abschluss meiner Lehre bei Optik Walter mit der Gesellenprüfung in München.</p>
          </div>
        </div>
        <div class="container left">
          <div class="content">
            <h2>1998</h2>
            <p>Erfolgreich die Meisterprüfung im Augenoptikerhandwerk, mit Auszeichnung der Privatschule für Augenoptik in Karlsruhe, abgelegt.</p>
          </div>
        </div>
        <div class="container right">
          <div class="content">
            <h2>2000</h2>
            <p>Betriebsleiterin für die Filiale von Optik Walter in Spiegelau.</p>
          </div>
        </div>
        <div class="container left">
          <div class="content">
            <h2>2020</h2>
            <p>Mit der Erfahrung von 22 Meisterjahren erfülle ich mir nun meinen
            Traum vom eigenen Optikfachgeschäft und mache den Schritt in die
            Selbstständigkeit mit Optik Simone.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
      <h3 class="centerText">ÜBER UNS</h3>
      <hr/>
      <ul class="anordnungAbout">
        <li>
          <img src="https://via.placeholder.com/600x400.png"/>
        </li><!-- Fix white space between blocks
        --><li>
          <h2 class="centerText">Der Laden</h2>
          <div class="alignmentOfP centerText"><p><?php echo file_get_contents("texts/about1.txt"); ?></p></div>
        </li>
      </ul>
      <ul class="anordnungAbout">
        <li>
          <h2 class="centerText">Die Chefin</h2>
          <div class="alignmentOfP"><p><?php echo file_get_contents("texts/about2.txt"); ?></p></div>
        </li><!-- Fix white space between blocks
        --><li>
          <img src="https://via.placeholder.com/600x400.png"/>
        </li>
      </ul>
    </section>

    <!-- CONTACT -->
    <section class="centerText" id="contact">
      <h3>KONTAKT</h3>
      <hr/>
        <ul id="contactinfo">
          <li>
            <h2>Öffnungszeiten:</h2><br/>
            <p>Montag - Freitag:<br/>
            09:00 - 13:00<br/>
            14:00 - 18:00<br/>
            <br/></p>
            <p>Samstag:<br/>
            09:00 - 12:00</p>
          </li><!-- Fix white space between blocks
          --><li>
            <h2>Telefon:</h2><br/>
            <p><a href="tel:085536463">08553 / 6463</a></p>
          </li><!-- Fix white space between blocks
          --><li>
            <h2>Anschrift:</h2><br/>
            <p>Hauptstr. 13<br/>
            94518 Spiegelau</p>
          </li><!-- Fix white space between blocks
          --><li>
            <h2>E-Mail:</h2><br/>
            <p><a href="mailto:info@optik-simone.de">info@optik-simone.de</a></p>
          </li>
        </ul>
        
        <?php
        if(!empty($_POST["sendMail"])) {
          if(isset($_POST['g-recaptcha-response'])){
            $captcha=$_POST['g-recaptcha-response'];
          }
          if(!$captcha){
            $message = "Bitte beachten Sie das Captcha!";
            $type = "errorContact";
          } else {//Wenn das Captcha geklickt wurde weiter prüfen
            $ff = file('config/keys.txt');  //Secret Key nicht im Repo speichern
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

        <div id="googlemaps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.0880339270648!2d13.360240315595057!3d48.913714979292926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4774e081e2797199%3A0xc306ecdf125206d9!2sHauptstra%C3%9Fe%2013%2C%2094518%20Spiegelau!5e0!3m2!1sde!2sde!4v1586096352777!5m2!1sde!2sde"
                  width="100%"
                  height="500"
                  frameborder="0"
                  style="border:0;"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"></iframe>
        </div>
    </section>

    <!-- Footer per PHP einfügen -->
    <?php echo file_get_contents("parts/footer.html"); ?>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/mobile-menu.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
