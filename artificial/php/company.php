<link rel="stylesheet" href="/artificial/css/company.css">
<script src="/artificial/js/jquery.circlemouse.js"></script>
<section id="company" class="hdr-sc">
  <div class="container">
  </div>
  <section class="img-hdr">
    <div class="container">
      <h2>COMPANY</h2>
    </div>
    <img src="/artificial/images/abstract-1.jpg" style="height:1080px; margin-top:-34%;"></img>
  </section>
  <section class="lt-grey-sc rg-sc title-sc">
    <header class="header-divider">
      <h2>Meet the team.</h2>
    </header>
    <div class="arrow-sc"></div>
  </section>
  <section class="med-lt-grey-sc rg-sc">
    <div class="container">
      <section id="team">
        <div class="member">
          <div class="member-circle">
            <img src="/artificial/images/me.jpg" alt="Dayan Balevski - Graphic Designer &amp; Web Developer">
            <div class="inner-circle"></div>
            <div class="social-circles">
              <a class="soc-circle fb-circle" href="https://www.facebook.com/dayan.balevski"
              data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-facebook"></i></a>
              <a class="soc-circle tw-circle" href="https://twitter.com/Dayan_Balevski"><i class="fa fa-twitter"></i></a>
              <a class="soc-circle li-circle" href="https://www.linkedin.com/pub/dayan-balevski/82/112/96"><i class="fa fa-linkedin"></i></a>
              <a class="soc-circle gp-circle" href="https://plus.google.com/+DayanBalevski/"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
          <strong>Dayan Balevski</strong>
        	<p>Graphic Designer &amp; Web Developer</p>
        </div>
        <div class="member">
          <div class="member-circle">
            <img src="/artificial/images/me.jpg" alt="Dayan Balevski - Graphic Designer &amp; Web Developer">
            <div class="inner-circle"></div>
            <div class="social-circles">
              <a class="soc-circle fb-circle" href="https://www.facebook.com/dayan.balevski"
              data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-facebook"></i></a>
              <a class="soc-circle tw-circle" href="https://twitter.com/Dayan_Balevski"><i class="fa fa-twitter"></i></a>
              <a class="soc-circle li-circle" href="https://www.linkedin.com/pub/dayan-balevski/82/112/96"><i class="fa fa-linkedin"></i></a>
              <a class="soc-circle gp-circle" href="https://plus.google.com/+DayanBalevski/"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
          <strong>Ronald Griffin</strong>
        	<p>Motion Graphics Designer</p>
        </div>
        <div class="member">
          <div class="member-circle ">
            <img src="/artificial/images/me.jpg" alt="Dayan Balevski - Graphic Designer &amp; Web Developer">
            <div class="inner-circle"></div>
            <div class="social-circles">
              <a class="soc-circle fb-circle" href="https://www.facebook.com/dayan.balevski"
              data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-facebook"></i></a>
              <a class="soc-circle tw-circle" href="https://twitter.com/Dayan_Balevski"><i class="fa fa-twitter"></i></a>
              <a class="soc-circle li-circle" href="https://www.linkedin.com/pub/dayan-balevski/82/112/96"><i class="fa fa-linkedin"></i></a>
              <a class="soc-circle gp-circle" href="https://plus.google.com/+DayanBalevski/"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
          <strong>Dan Lond</strong>
        	<em>Writer</em>
        </div>
      </section>
    </div>
  </section>
</section>

<script type="text/javascript">
$(function() {
  var memberCircle = $('.member-circle');
  var socialCircle = $('.soc-circle');

  var inside;
  var inside2=false;

  memberCircle.circlemouse({
    onMouseEnter	: function( el ) {

      el.addClass('ec-circle-hover hvr-ripple-out');
    },
    onMouseLeave	: function( el ) {
      if (!inside ){
        el.removeClass('ec-circle-hover hvr-ripple-out');
      }
    },
    onClick			: function( el ) {

    //  alert('clicked');

    }
  });

  socialCircle.circlemouse({
    onMouseEnter	: function( el ) {
      el.parents('.member-circle').addClass('ec-circle-hover hvr-ripple-out');
      el.addClass('soc-circle-hover');
      el.popover('show');
      inside = true;
    },
    onMouseLeave	: function( el ) {
      el.parents('.member-circle').removeClass('ec-circle-hover hvr-ripple-out');
      el.removeClass('soc-circle-hover');
      el.popover('hide');
      inside = false;
    },
    onClick			: function( el ) {
       window.location = $(el).attr("href");
    }
  });

});
</script>
