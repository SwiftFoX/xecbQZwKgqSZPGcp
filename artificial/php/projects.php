<script src="./js/Shuffle-3.0.0/dist/jquery.shuffle.modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="./css/project.css">

<section id="projects" class="hdr-sc">
  <section class="img-hdr">
    <div class="container">
      <h2>PROJECTS</h2>
    </div>
    <img src="./images/abstract-green.jpg" style="margin-top:-25%;"></img>
  </section>
  <section id="projects-area" class="dk-grey-sc rg-sc">
    <div class="container">
      <section id="filter-options" class="med-grey-sc rg-sc">
        <div class="option">
          <label for="filter">Filter:</label>
          <div id="filter" name="filter" class="btn-group shuffle-filter" role="group" aria-label="...">
            <button type="button" class="btn btn-default" data-filter="all">All</button>
            <button type="button" class="btn btn-default" data-filter="web">Web</button>
            <button type="button" class="btn btn-default" data-filter="motion">Motion</button>
            <button type="button" class="btn btn-default" data-filter="graphics">Graphics</button>
            <button type="button" class="btn btn-default" data-filter="logo">Logos</button>
          </div>
        </div>
        <div class="option">
          <label for="sort">Sort:</label>
          <select name="sort" id="sort" class="selectpicker sort-options">
            <option value="">Default</option>
            <option value="title">Title</option>
            <option value="date-created">Date Created</option>
          </select>
        </div>
        <div class="option">
          <label for="search">Search:</label>
          <input id="search" type="search" autocomplete="off" name="search" class="js-shuffle-search" placeholder="search..."/>
        </div>
      </section>
      <div id="grid" class="row-fluid">
        <figure class="span3 picture-item" data-groups='["motion"]' data-date-created="2010-09-14" data-title="Baseball">
          <img src="./images/abstract-green.jpg" height="145" width="250" />
          <div class="picture-item__details clearfix">
            <figcaption class="picture-item__title pull-left">Baseball</figcaption>
            <p class="picture-item__tags pull-right">motion</p>
          </div>
        </figure>
        <div class="spacer"></div>
        <figure class="span6 picture-item" data-groups='["web","motion"]' data-date-created="2015-09-14" data-title="KBaseball">
          <img src="./images/abstract-green.jpg" height="145" width="250" />
          <div class="picture-item__details clearfix">
            <figcaption class="picture-item__title pull-left">Tennis</figcaption>
            <p class="picture-item__tags pull-right">web, motion</p>
          </div>
        </figure>
        <figure class="span3 picture-item" data-groups='["logo","graphics"]' data-date-created="2013-09-14" data-title="ABaseball">
          <img src="./images/abstract-green.jpg" height="145" width="250" />
          <div class="picture-item__details clearfix">
            <figcaption class="picture-item__title pull-left">iMac</figcaption>
            <p class="picture-item__tags pull-right">logo, graphics</p>
          </div>
        </figure>
        <figure class="span3 picture-item" data-groups='["web","logo"]' data-date-created="2010-09-14" data-title="lBaseball">
          <img src="./images/abstract-green.jpg" height="145" width="250" />
          <div class="picture-item__details clearfix">
            <figcaption class="picture-item__title pull-left">iMa2c</figcaption>
            <p class="picture-item__tags pull-right">web, logo</p>
          </div>
        </figure>
        <figure class="span3 picture-item picture-item--h2" data-groups='["graphics"]' data-date-created="2009-09-14" data-title="RBaseball">
          <img src="./images/abstract-green.jpg" height="145" width="250" />
          <div class="picture-item__details clearfix">
            <figcaption class="picture-item__title pull-left">Master Chief</figcaption>
            <p class="picture-item__tags pull-right">graphics</p>
          </div>
        </figure>
      </div>
      <div class="shuffle-error"></div>
    </div>
  </section>
</section>

<script>
$(document).ready(function() {

  $('.selectpicker').selectpicker();

  var $grid = $('#grid'),
      $sizer = $grid.find('.shuffle__sizer');

  var $window = $('.container').outerWidth();
  var $width = 0;
  var $gutter = 0;
  var $cols = 4;

  gutter();

  $grid.shuffle({
    itemSelector: '.picture-item',
    columnWidth: $width,
    gutterWidth: $gutter
  });

  function shuffle() {

    gutter();

    $grid.shuffle('destroy');

    $grid.shuffle({
      itemSelector: '.picture-item',
      columnWidth: $width,
      gutterWidth: $gutter
    });
  }

  function gutter() {
    if ($window <= 1200) $cols = 4;
    if ($window <= 990) $cols = 3;
    if ($window <= 770) $cols = 2;
    if ($window <= 480) $cols = 1;

    $width = Math.floor(($window / $cols) - (($window / $cols) * 0.1));
    if($window <= 480) {
      $grid.find('figure > img').attr({width : 480, height: 280});
      $width = 480;
    }else if ($window <= 770) {
      $grid.find('figure > img').attr({width : 350, height: 200});
      $width = 350;
    }else {
      $grid.find('figure > img').attr({width : 250, height: 140});
    }
    $gutter = Math.floor($window / $cols - $width);
  }

  $(window).resize(function() {
    $window = $('.container').outerWidth();
    shuffle();
  });

  $('#grid figure > img').on('click', function()  {
    var project = $(this).parents('figure').data('title');
    window.location = "./project.php?project="+project;
  })

  $('#grid figure figcaption').on('click', function(e)  {
    var project = $(this).parents('figure').data('title');
    window.location = "./project.php?project="+project;
  })

  // Sorting options
  $('.sort-options').on('change', function() {
    var sort = this.value,
        opts = {};

    // We're given the element wrapped in jQuery
    if ( sort === 'date-created' ) {
      opts = {
        reverse: true,
        by: function($el) {
          return $el.data('date-created');
        }
      };
    } else if ( sort === 'title' ) {
      opts = {
        by: function($el) {
          return $el.data('title').toLowerCase();
        }
      };
    }

    // Filter elements
    $grid.shuffle('sort', opts);
  });

  $('.js-shuffle-search').on('keyup change', function() {
    var val = this.value.toLowerCase();
    $grid.shuffle('shuffle', function($el, shuffle) {

      // Only search elements in the current group
      if (shuffle.group !== 'all' && $.inArray(shuffle.group, $el.data('groups')) === -1) {
        return false;
      }

      var text = $.trim( $el.find('.picture-item__title').text() ).toLowerCase();
      return text.indexOf(val) !== -1;
    });
  });

  $('.shuffle-filter > button').on('click', function() {

    var val = $(this).data('filter').toLowerCase();
    $('.shuffle-filter > button').removeClass('active');
    $(this).addClass('active');
    $grid.shuffle('shuffle', function($el, shuffle) {
      // Only search elements in the current group

      if (val === 'all') {
        return true;
      }
      if (val !== 'all' && $.inArray(val, $el.data('groups')) !== -1) {
        return true;
      }

      var text = $.trim( $el.find('.picture-item__title').text() ).toLowerCase();
      return text.indexOf(val) !== -1;
    });
  });

  $grid.on('layout.shuffle', function($el) {
    var error = $('.shuffle-error');
    var errText = '<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>';
    if ($('#grid.row-fluid.shuffle > .filtered').length == 0 ) {
      error.show().html(errText + '&nbsp;Sorry, no results found in your criteria');
    }else {
      error.hide();
    }
  });
});
</script>
