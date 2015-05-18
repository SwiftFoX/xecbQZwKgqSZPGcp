<?php require('/scripts/sendemail.php'); ?>
<link rel="stylesheet" href="css/contact.css">
<section id="contact" class="hdr-sc rg-sc">
  <div class="container">
    <div class="error-log">
      <?php
        if (!empty($error_msg)) {
        	echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>";
        }
        if ($result != NULL) {
        	echo '<p class="success">'. $result . "</p>";
        }
      ?>
    </div>
    <form id="contact-form" role="form"
      class="frm-lt-50" method="POST" action="<?php echo basename(__FILE__); ?>">
      <noscript>
      		<p><input type="hidden" name="nojs" id="nojs" /></p>
      </noscript>
      <h3>Send us an email!</h3>
      <div style="height: 30px;" class="divider"></div>
      <span class="form-group required">
        <label for="name" class="control-label">Fullname</label>
        <input type="text" autocomplete="off" required name="name" id="name"/>
        <div class="help-block with-errors"></div>
      </span>
      <span class="form-group required">
        <label for="email" class="control-label">Email</label>
        <input type="email"  autocomplete="off" required name="email" id="email"/>
        <div class="help-block with-errors"></div>
      </span>
      <span class="form-group">
        <label for="project-chk" class="checkbox-label control-label" >
          <input type="checkbox"  name="project-chk" id="project-chk" value="quote"
          data-toggle="collapse" href="#collapseBudget" aria-expanded="false" checked='false' aria-controls="collapseBudget"/>
          <span class="chkk"></span>
          <div class="chk-text">Contacting us about a project or quote?</div>
        </label>
      </span>
      <span id="collapseBudget" class="collapse form-group required">
        <label for="subject" class="control-label">Budget</label>
        <select  name="budget" required id="budget" data-budget="2" class="selectpicker required">
          <option value="">Select your budget</option>
          <option value="350">$350-750 USD</option>
          <option value="750">$750-1500 USD</option>
          <option value="1500">$1500-3000 USD</option>
          <option value="3000">$3000+ USD</option>
        </select>
        <div class="help-block with-errors"></div>
      </span>
      <span class="form-group required">
        <label for="subject" class="control-label">Subject</label>
        <input  type="text" autocomplete="off" required name="subject" id="subject"/>
        <div class="help-block with-errors"></div>
      </span>
      <span class="form-group required">
        <label for="comments" class="control-label">Message</label>
        <textarea name="comments" autocomplete="off" required id="comments"></textarea>
        <div class="help-block with-errors"></div>
      </span>
      <div style="height: 20px;" class="divider"></div>
      <span class="form-group">
        <button type="submit" id="send" form="contact-form" class="generic-btn hvr-rectangle-out" name="submit" value="send"
        <?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?>>Send</button>
      </span>
    </form>
    <div class="frm-rt-50">
      <h3>Contact Us</h3>
      <div style="height: 50px;" class="divider"></div>
      <p>Question, feel free to contact us either in person , our staff are at your disposal .</p>
      <p>
        <strong>Address:</strong> 3300 Eger, Széchenyi István u. 14.<br>
        <strong>Telephone:</strong> + 36 70 418 98 90<br>
        <strong>Email:</strong> contact@aa.com<br>
      </p>
    </div>
  <div>
</section>
<script>
$(function(){
  $('.selectpicker').selectpicker();

  $('#contact-form').validator();

  $('#send').on('click', function(){
    $('#contact-form').validator('validate');
  });

  $('#collapseBudget').on('show.bs.collapse', function () {
    $('#budget').prop('disabled', false);
  });

  $('#collapseBudget').on('hidden.bs.collapse', function () {
    $('#budget').prop('disabled', 'disabled');
  });
});

</script>
