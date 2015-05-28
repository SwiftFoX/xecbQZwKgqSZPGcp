<?php $error_msg = []; ?>
<script>
  $(function() {

    var resized = false;
    var resized2 = false;
    resize($(window).width());

    $(window).resize(function() {
      resize($(this).width());
    });

    function resize(width){
      if (width > 480 && !resized) {
        $('#head').empty().load('/artificial/php/header.php');
        $("footer").empty().load('/artificial/php/footer.php');
        $('main').css('width', 'auto');
        resized = true;
        resized2 = false;
      }else if(width <= 480 && !resized2) {
        $('#head').empty().load('/artificial/php/mobile-header.php');
        $('footer').empty().load('/artificial/php/mobile-footer.php');
        $('main').width($(window).width());
        resized = false;
        resized2 = true;
      }
    }
  })
</script>

<div id="head">
</div>

<div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-chevron-up"></i>
	</span>
</div>


<script>
$(function()
{
  $('#client-login-form').validator();

  $('#signin').on('click', function(){
    $('#client-login-form').validator('validate');
  });

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
