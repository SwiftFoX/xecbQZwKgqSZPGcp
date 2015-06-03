<link rel="stylesheet" href="/artificial/css/services.css">
<script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
<style>
video { display: block; }
video#bgvid {
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -100;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  background: url(polina.jpg) no-repeat;
  background-size: cover;
}
</style>
<section id="motion" class="service hdr-sc">
  <section class="img-hdr  video-section">
    <div class="container">
      <h2>SERVICES <i class="fa fa-chevron-right"></i> Motion Design</h2>
    </div>
    <video autoplay loop poster="/artificial/images/icons/motion.png" id="bgvid">
      <!--<source src="https://www.youtube.com/embed/wLc7oRD13BQ" type="video/webm">-->
      <source src="/artificial/videos/test.mp4" type="video/mp4">
      <source src="/artificial/videos/test.webm" type="video/webm">
      <source src="/artificial/videos/test.ogv" type="video/ogv">
      <span>VIDEO FORMAT NOT SUPPORTED</span>
    </video>
    <!--[if lt IE 9]>
      <script>
      document.createElement('video');
      </script>
    <![endif]-->
    <!--<img src="http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-77673.jpg" style=""></img>-->
  </section>
  <section class="service-section dk-grey-sc rg-sc">
    <div class="container">
      <img src="/artificial/images/icons/motion.png" alt="motion design"/>
    </div>
  </section>
</section>
