<form name="contactForm" method="post" enctype="multipart/form-data"
  onsubmit="return validateContactForm()">
  <label>Name:<br/>
    <input type="text" class="inputTextfield" name="userName" id="name"/>
  </label><br/>
  <span id="errorName"></span><br/>
  <label>E-Mail:<br/>
    <input type="text" class="inputTextfield" name="userEmail" id="email"/>
  </label><br/>
  <span id="errorMail"></span><br/>
  <label>Nachricht:<br/>
    <textarea name="content" id="content" class="inputTextarea" cols="60" rows="6"></textarea>
  </label><br/>
  <span id="errorContent"></span><br/>
  <div class="g-recaptcha" data-sitekey="6Lf2KfoUAAAAAATS4pgJQNETnlBIAaRKZzd8vobT"></div><br/>
  <input type="submit" name="sendMail" class="btnSubmit" value="Senden" /><br/>
  <div id="statusMessage">
    <?php
      if (! empty($message)) {
    ?>
      <p class='<?php echo $type; ?>'><?php echo $message; ?></p>
    <?php
      }
    ?>
  </div>
</form>
