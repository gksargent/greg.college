<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/base.php'; ?>
<?php $pageTitle = 'Dates'; ?>

<!DOCTYPE html>
<html>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>


<main>

  <h1><?php echo "$pageTitle"; ?></h1>

  <?php

  echo "The day of the week is " . date('l') . "<br />\n";
  echo "The time is " . date('g:ia') . "<br />\n";
  echo $today . "<br />\n";
  echo date('l');
   ?>


</main>


<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
