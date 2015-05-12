<?php

  $page = new page();


  class page {
    public $currentpage = 'php/home.php';

    function currentpage() {
      return $currentpage;
    }

    function curPageURL() {
      return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    }
  }

?>
