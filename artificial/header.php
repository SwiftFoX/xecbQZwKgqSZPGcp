<header>
  <div id="topbar">
    <div class="container">
      <div id="network">
        <ul id="network">
          <li><a href="#">MAIN SITE</a>
        </ul>
      </div>
      <div id="login" class="dropdown">
        <a id="login-btn" data-target="#" href="http://example.com" data-toggle="dropdown"
                aria-haspopup="true" role="button" aria-expanded="false">
          CLIENT LOGIN&nbsp;
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu pull-right arrow" role="menu" aria-labelledby="dLabel">
          <li role="presentation">
            <form id="client-login-form" action="#" method="POST">
              <input type="text"/>
              <input type="text"/>
              <input type="submit" value="Sign in" />
            </form>
          </li>
          <li role="presentation"><a role="menuitem" href="#">Forgot Password</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" href="#">Register Client Account</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="header" class="transparent">
    <div class="container">
      <div id="logo"><a href="#"><img src="./images/logo.png"/></a></div>
      <nav>
        <li class="nav-item" id="home"><a class="nav-link" href="./index.php">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="./projects.php">PROJECTS</a></li>
        <li class='nav-item dropdown'>
          <button class="nav-link" onSubmit="return false;" data-target="#" data-toggle="dropdown"
                data-hover="dropdown" data-delay="1000" data-close-others="false"
                aria-haspopup="true" role="button" aria-expanded="false">SERVICES&nbsp;<span class="caret"></span></button>
          <ul class="dropdown-menu pull-right arrow" role="menu" aria-labelledby="dLabel">
            <li role="presentation"><a role="menuitem" href="./services/webdev.php">
              <span class="service-icon"><img src="./images/icons/web.png"></span>
              Web Development</a></li>
            <li role="presentation" class="divider2"></li>
            <li role="presentation"><a role="menuitem" href="./services/motion.php">
              <span class="service-icon"><img src="./images/icons/motion.png"></span>
              Motion Graphics</a></li>
            <li role="presentation" class="divider2"></li>
            <li role="presentation"><a role="menuitem" href="./services/graphic.php">
              <span class="service-icon"><img src="./images/icons/graphics.png"></span>
              Graphic Design</a></li>
            <li role="presentation" class="divider2"></li>
            <li role="presentation"><a role="menuitem" href="./services/audio.php">
              <span class="service-icon"><img src="./images/icons/audio.png"></span>
              Audio Development</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="./company.php">COMPANY</a></li>
        <li class="nav-item"><a class="nav-link" href="./contact.php">CONTACT</a></li>
      </nav>
    </div>
  </div>
</header>

<div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-chevron-up"></i>
	</span>
</div>

<script>
$(function()
{
  $('input[type=checkbox]').on('click', function(){
    if($(this).attr('checked')){
      $(this).attr('checked', false);
      $(this).next().addClass("checked");
    }else {
      $(this).attr('checked', true);
      $(this).next().removeClass("checked");
    }
  });

  $('.dropdown-toggle').dropdownHover().dropdown()
  $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
        e.stopPropagation();
  });

  var active = false;

  $("#header .nav-link").each(function() {
    active = false;
    loc = window.location.href.split(".php")[0] +".php";
    if (this.href == loc) {
        $(this).addClass("active");
        active = true;
        return false;
    }
  });

	$(document).on( 'scroll', function(){

		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});

  $('.scroll-top-wrapper').on('click', scrollToTop);
});

function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>
