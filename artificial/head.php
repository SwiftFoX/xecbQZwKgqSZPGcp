<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Artificial Animation</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href= "/artificial/css/style.css">
  <link rel="stylesheet" media="(max-width: 480px)" href="/artificial/css/res-360-480.css">
  <link rel="stylesheet" media="(max-width: 768px)" href="/artificial/css/res-480-768.css">
  <link rel="stylesheet" media="(max-width: 990px)" href="/artificial/css/res-768-990.css">
  <link rel="stylesheet" media="(max-width: 1200px)" href="/artificial/css/res-990-1200.css">

  <link rel="stylesheet" href="/artificial/css/hover.css">
  <link rel="stylesheet" href="/artificial/css/normalize.css">
  <link rel="stylesheet" href="/artificial/css/bootstrap-select.css">
  <link rel="stylesheet" href="/artificial/css/modal.css">

  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="/artificial/js/jquery.modernizr.js" type="text/javascript"></script>
  <script src="/artificial/js/icheck/icheck.min.js"></script>

  <script src="/artificial/js/icheck/custom.min.js"></script>
  <link href="/artificial/js/icheck/skins/all.css" rel="stylesheet">

  <script src="/artificial/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <link href="/artificial/js/scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

  <script src="/artificial/js/bootstrap-select.js"></script>
  <script src="/artificial/js/modernizr.js"></script>

  <script src="/artificial/js/bootstrap-validator.js"></script>

  <script src="/artificial/js/bootstrap-hover.js"></script>

  <link rel='stylesheet' type='text/css' href='/artificial/font-awesome/css/font-awesome.min.css' />

  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<script>
/* remove border around all input elements */
if (navigator.userAgent.toLowerCase().indexOf("chrome") >= 0)
{
    var _interval = window.setInterval(function ()
    {
        var autofills = $('input:-webkit-autofill');
        if (autofills.length > 0)
        {
            window.clearInterval(_interval); // stop polling
            autofills.each(function()
            {
                var clone = $(this).clone(true, true);
                $(this).after(clone).remove();
            });
        }
    }, 20);
}
</script>
