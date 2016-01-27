<link rel="stylesheet" href="/artificial/css/services.css">
<section id="webdev" class="service hdr-sc">
  <section class="img-hdr">
    <div class="container">
      <h2>SERVICES <i class="fa fa-chevron-right"></i> Web Development</h2>
    </div>
    <img src="http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-134284.jpg" style=" margin-top:-25%;"></img>
  </section>
  <section class="service-section dk-grey-sc rg-sc">
    <div class="container">
      <section class="service">
        <div class="service-block">
          <div class="image-block pull-left">
            <div class="preview-circle">
            <img src="/artificial/images/icons/responsive-design.png"  alt="web development"/>
            </div>
          </div>
          <div class="service-head">
            <h1>Web Design</h2>
          </div>
          <div class="service-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in
            auctor diam. Cras quis massa metus. Integer molestie suscipit lorem
            tempus ornare. Proin vitae pharetra nisl, eget suscipit nibh. Donec
            nibh lectus, laoreet eget interdum vel, efficitur ac sem. Curabitur
            ut aliquam massa. Nulla vel pretium lacus. Nullam elementum tristique
            arcu, vestibulum faucibus nisi euismod eu.</p>
          </div>
        </div>
      </section>
      <section class="service">
        <div class="service-block">
          <div class="image-block pull-right">
            <div class="preview-circle">
            <img src="/artificial/images/icons/responsive-design.png"  alt="web development"/>
            </div>
          </div>
          <div class="service-head">
            <h1>Web Design</h2>
          </div>
          <div class="service-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in
            auctor diam. Cras quis massa metus. Integer molestie suscipit lorem
            tempus ornare. Proin vitae pharetra nisl, eget suscipit nibh. Donecs
            nibh lectus, laoreet eget interdum vel, efficitur ac sem. Curabitur
            ut aliquam massa. Nulla vel pretium lacus. Nullam elementum tristique
            arcu, vestibulum faucibus nisi euismod eu.</p>
          </div>
        </div>
      </section>
    </div>
  </section>
</section>

<script>
$(function(){
  $('.preview-circle').click(function() {
    $('.preview-modal').remove();
    var modal = $('<div class="modal fade preview-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">\
    <div class="modal-dialog"> \
      <div class="modal-content"> \
        <div class="modal-body"> \
        <img src="'+ $(this).find('img').attr('src') +'"/> \
        </div> \
      </div> \
    </div>');
    $(this).after(modal);
    modal.find('.modal-dialog').css({
      'max-width' : '1000px',
      'width' : 'auto',
      'padding' : '20px'
      });
    modal.find('img').css({
      'max-width' : '900px',
      'width' : '100%',
      'text-align' : 'center'
    });
    modal.modal('show');
  })
});
</script>
