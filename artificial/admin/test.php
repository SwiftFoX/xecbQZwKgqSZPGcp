
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="../js/gridstack.js-master/dist/gridstack.css"/>

<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js"></script>
<script src="../js/gridstack.js-master/dist/gridstack.js"></script>

<style type="text/css">
  .grid-stack {
      background: transparent;
      height: auto !important;
  }

  .grid-stack-item {
    height:auto !important;
    min-height:inherit !important;
    position:relative !important;
    z-index:1;
    margin-left:-10px !important;
  }

  .grid-stack-item-content {
    color: #2c3e50;
    background-color: #18bc9c;
    display: block;
    width: 100% !important;
    position:relative !important;
  }
  .delete {
    position:absolute;
    z-index:1;
    top:0;
    right:0;
  }
  .grid-stack-placeholder {
    z-index:0;
    position:absolute !important;
    width: auto !important;
    min-height:100% !important;
    position:absolute !important;
  }
  .placeholder-content {
    width:100% !important;
    border: 1px dashed #575757;
    background: #444444;
  }
</style>


<link rel="stylesheet" href="/artificial/css/services.css">
<section id="graphic" class="service hdr-sc">
  <section class="service-section rg-sc" style="padding:20px;">
      <div class="grid-stack">
        <div class="grid-stack-item"
        data-gs-auto-position="true" data-gs-no-resize ="true"
        data-gs-min-height="1">
            <div class="grid-stack-item-content">
              <div class="widget-toolbar">
                <i class="fa fa-remove delete"></i>
                <i class="fa fa-minus expand expanded"></i>
              </div>
              <div class="widget-content">
                test<br/>
                test<br/>
                test<br/>
                test<br/>
                test<br/>
                test<br/>
                test<br/>
                test<br/>
                test<br/>
                test<br/>
                test<br/>test<br/>
                test<br/>

              </div>
            </div>
        </div>
  </section>
</section>


<script type="text/javascript">
  $(function () {
      var options = {
          float: true,
          animate: true
      };
      $('.grid-stack').gridstack(options);

      $('.delete').click(function(){
        var grid = $('.grid-stack').data('gridstack');
        grid.remove_widget($(this).parents('.grid-stack-item'));
      });

      $('.expand').click(function(){
        if($(this).hasClass('expanded')){
          $(this).removeClass('fa-minus expanded').addClass('fa-plus collapsed');
          $(this).parents('.grid-stack-item').find('.widget-content').hide();
        } else {
          $(this).removeClass('fa-plus collapsed').addClass('fa-minus expanded');
          $(this).parents('.grid-stack-item').find('.widget-content').show();
        }
      });
  });
</script>
