<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/base.php'; ?>
<?php $pageTitle = 'Arrays & Control Structures'; ?>

<!DOCTYPE html>
<html>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>


<main>

  <h1><?php echo "$pageTitle"; ?></h1>

  <p>A spot to practice how to manipulate and use arrays.</p>
  <hr />

  <h2>Loops Practice</h2>
  <?php
  $i = 0;
  do {
  echo "$i is greater than 2\n";
  $i++;
  } while ($i > 2);
   ?>

</main>


<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
