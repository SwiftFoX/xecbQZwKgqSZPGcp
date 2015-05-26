<link href="/artificial/css/mobile-header.css" rel="stylesheet">
<div class="overlay"></div>

<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
  <ul class="nav sidebar-nav">
      <li class="sidebar-brand">
          <div class="logo">
            <a href="/artificial/index.php">
              <img src="/artificial/images/logo.png">
            </a>
          </div>
      </li>
      <li id="client-login" class="dropdown" aria-expanded="false">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
        <form id="client-login-form" role="form" autocomplete="off" action="#" method="POST">
          <div class="error-log">
            <?php
              if (!empty($error_msg)) {
                echo '<p class="error">'. implode("<br />", $error_msg) . "</p>";
              }
            ?>
          </div>
          <noscript>
              <p><input type="hidden" name="nojs" id="nojs" /></p>
          </noscript>
          <h3>Existing Client Login</h3>
          <span class="form-group has-feedback required">
            <input type="text" placeholder="Email" autocomplete="off" required name="email" id="email"/>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
          </span>
          <span class="form-group has-feedback required">
            <input type="password" placeholder="Password" autocomplete="off" required name="password" id="password"/>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
          </span>
          <span class="form-group">
            <button type="submit" id="signin"
                    form="client-login-form" class="generic-btn hvr-rectangle-out"
                    name="signin" value="signin">Sign In</button>
          </span>
        </form>
      </ul>
      </li>
      <li>
          <a href="#">Home</a>
      </li>
      <li>
          <a href="#">Projects</a>
      </li>
      <li>
        <li class="dropdown" aria-expanded="false">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li role="presentation"><a role="menuitem" href="/artificial/services/webdev.php">
              <span class="service-icon"><img src="/artificial/images/icons/web.png"></span>
              Web Development</a></li>
            <li role="presentation"><a role="menuitem" href="/artificial/services/motion.php">
              <span class="service-icon"><img src="/artificial/images/icons/motion.png"></span>
              Motion Graphics</a></li>
            <li role="presentation"><a role="menuitem" href="/artificial/services/graphic.php">
              <span class="service-icon"><img src="/artificial/images/icons/graphics.png"></span>
              Graphic Design</a></li>
          </ul>
        </li>


      </li>
      <li>
          <a href="#">Company</a>
      </li>
      <li>
          <a href="#">Contact</a>
      </li>
  </ul>
</nav>
<!-- /#sidebar-wrapper -->
<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
    <span class="hamb-top"></span>
<span class="hamb-middle"></span>
<span class="hamb-bottom"></span>
</button>
<!-- /#page-content-wrapper -->
<script>

$(function()
{
  $('#client-login-form').validator();

  $('#signin').on('click', function(){
    $('#client-login-form').validator('validate');
  });
});
var trigger = $('.hamburger'),
     overlay = $('.overlay'),
    isClosed = false;

   trigger.click(function () {
     hamburger_cross();
   });

   function hamburger_cross() {

     if (isClosed == true) {
       overlay.hide();
       trigger.removeClass('is-open');
       trigger.addClass('is-closed');
       isClosed = false;
     } else {
       overlay.show();
       trigger.removeClass('is-closed');
       trigger.addClass('is-open');
       isClosed = true;
     }
 }

 $('[data-toggle="offcanvas"]').click(function () {
       $('.wrap').toggleClass('toggled');
 });
</script>
