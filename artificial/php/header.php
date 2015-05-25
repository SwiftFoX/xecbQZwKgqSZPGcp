<header>
  <div id="topbar">
    <div class="container">
      <!--<div id="network">
        <ul id="network">
          <li><a href="/artificial/index.php">MAIN SITE</a>
        </ul>
      </div>-->
      <div id="login" class="dropdown">
        <button id="login-btn" data-toggle="dropdown"
                aria-haspopup="true" role="button" aria-expanded="false">
          CLIENT LOGIN&nbsp;
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right arrow" role="menu" aria-labelledby="dLabel">
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
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" href="#">Forgot Password</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" href="#">Register Client Account</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="header" class="transparent">
    <div class="container">
      <div id="logo"><a href="/artificial/index.php"><img src="/artificial/images/logo.png"/></a></div>
      <nav>
        <li class="nav-item" id="home"><a class="nav-link" href="/artificial/index.php">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="/artificial/projects.php">PROJECTS</a></li>
        <li class='nav-item dropdown'>
          <button class="nav-link" onSubmit="return false;" data-target="#" data-toggle="dropdown"
                data-hover="dropdown" data-delay="1000" data-close-others="false"
                aria-haspopup="true" role="button" aria-expanded="false">SERVICES&nbsp;<span class="caret"></span></button>
          <ul class="dropdown-menu pull-right arrow" role="menu" aria-labelledby="dLabel">
            <li role="presentation"><a role="menuitem" href="/artificial/services/webdev.php">
              <span class="service-icon"><img src="/artificial/images/icons/web.png"></span>
              Web Development</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" href="/artificial/services/motion.php">
              <span class="service-icon"><img src="/artificial/images/icons/motion.png"></span>
              Motion Graphics</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" href="/artificial/services/graphic.php">
              <span class="service-icon"><img src="/artificial/images/icons/graphics.png"></span>
              Graphic Design</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="/artificial/company.php">COMPANY</a></li>
        <li class="nav-item"><a class="nav-link" href="/artificial/contact.php">CONTACT</a></li>
      </nav>
    </div>
  </div>
</header>
