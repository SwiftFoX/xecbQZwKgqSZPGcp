<link rel="stylesheet" href="css/contact.css">
<section id="contact" class="hdr-sc rg-sc">
  <div class="container">
    <form id="contact-form"  class="frm-lt-50" method="GET" action="./php/scripts/send-message.php">
      <h3>Send us an email!</h3>
      <div style="height: 30px;" class="divider"></div>
      <span class="input-row">
        <label for="fullname">Fullname</label>
        <input type="text" name="fullname" id="fullname"/>
      </span>
      <span class="input-row">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"/>
      </span>
      <span class="input-row">
        <label for="subject">Budget</label>
        <select  name="budget" id="budget" class="selectpicker">
          <option name="default">Select your budget</option>
          <option>$350-750 USD</option>
          <option>$750-1500 USD</option>
          <option>$1500-3000 USD</option>
          <option>$3000+ USD</option>
        </select>
      </span>
      <span class="input-row">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject"/>
      </span>
      <span class="input-row">
        <label for="message">Message</label>
        <textarea name="message" id="subject"></textarea>
      </span>
      <div style="height: 20px;" class="divider"></div>
      <span class="input-row">
        <button type="submit" form="contact-form" class="generic-btn hvr-rectangle-out" name="submit" value="send">Send</button>
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
});

</script>
