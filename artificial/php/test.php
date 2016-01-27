<?php
  require_once('/scripts/page-handler.php');
  echo $currentpage = $page->curPageURL();
  header("Location:../index.php");
?>
test
