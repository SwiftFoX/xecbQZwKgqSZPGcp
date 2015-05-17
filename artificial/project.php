<?php
  //TODO:  && check if the project exists, else 404
  if (!isset($_GET['project'])){
    header("Location: /artificial/404.php");
    exit;
  }
?>

<html lang="en">
<?php require_once('head.php'); ?>
<body>
  <div class="wrap">
    <?php require_once('header.php'); ?>
    <main>
      <?php require_once('php/project.php'); ?>
    </main>
    <?php require_once('footer.php'); ?>
  </div>
</body>
</html>
