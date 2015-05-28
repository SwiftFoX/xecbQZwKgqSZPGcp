<section id="full-width-banner" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#full-width-banner" data-slide-to="0" class="active"></li>
    <li data-target="#full-width-banner" data-slide-to="1"></li>
    <li data-target="#full-width-banner" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/bg.jpg" style=""/>
      <div class="carousel-caption">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>fringilla felis ut turpis ullamcorp</p>
        <a class="generic-btn hvr-rectangle-out" href="/artificial/projects.php">VIEW PROJECT</a>
      </div>
    </div>
    <div class="item">
      <img src="images/abstract-1.jpg" style=""/>
      <div class="carousel-caption">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>fringilla felis ut turpis ullamcorp</p>
        <a class="generic-btn hvr-rectangle-out" href="/artificial/projects.php">VIEW PROJECT</a>
      </div>
    </div>
    <div class="item">
      <img src="images/projects/room-39/banner-1920x1080.png" style=""/>
      <div class="carousel-caption">
        <h3>PROJECT: ROOM-39</h3>
        <p>Credit sequence for a game related project</p>
        <a class="generic-btn hvr-rectangle-out" href="/artificial/projects.php">VIEW PROJECT</a>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#full-width-banner" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#full-width-banner" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</section>
<script>
$(function(){
  $('.carousel').carousel({
    interval: 5000
  });
});
</script>
<section id="portfolio-bar">
  <div class="container">
    <div class="port-bar-content">
        <span class="mission">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Sed fringilla felis ut turpis ullamcorper euismod.</span>
        <a class="generic-btn hvr-rectangle-out" style="margin-left:20px" href="./projects.php">VIEW OUR WORK</a>
    </div>
  </div>
</section>
<section id="services">
  <div class="container" style="display:table">
  <div class="service-tab" >
    <a  href="services/webdev.php"></a>
    <img class="service-latest-img" src="images/projects/room-39/banner-1920x1080.png"/>
    <div class="service-content">
    <div class="service-icon">
      <img src="images/icons/web.png"/>
    </div>
    <div class="service-title">WEB DEVELOPMENT</div>
    </div>
  </div>
  <div class="service-tab">
    <a href="services/motion.php"></a>
    <img class="service-latest-img" src="images/abstract-1.jpg"/>
    <div class="service-content">
    <div class="service-icon">
      <img src="images/icons/motion.png"/>
    </div>
    <div class="service-title">MOTION GRAPHICS</div>
  <!--  <div class="service-description">
      <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla felis ut turpis ullamcorper euismod.</span>
    </div>
  -->
  </div>
  </div>
  <div class="service-tab">
    <a href="services/graphic.php"></a>
    <img class="service-latest-img" src="images/bg.jpg"/>
    <div class="service-content">
    <div class="service-icon">
      <img src="images/icons/graphics.png"/>
    </div>
    <div class="service-title">GRAPHIC DESIGN</div>
  </div>
  </div>
  <!--
  <div class="service-tab">
    <a href="services/audio.php"></a>
    <div class="service-content">
    <div class="service-icon">
      <img src="images/icons/audio.png"/>
    </div>
    <div class="service-title">AUDIO DEVELOPMENT</div>
    <div class="service-description">
      <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla felis ut turpis ullamcorper euismod.</span>
    </div>
  </div>
  </div>
-->
  </div>
</section>

<script>
$(function() {
  $('.service-tab').on({
    mouseenter: function () {
      $(this).find('.service-latest-img').toggleClass("hovered");
    },
    mouseleave: function () {
      $(this).find('.service-latest-img').toggleClass("hovered");
    }
})
});
</script>
