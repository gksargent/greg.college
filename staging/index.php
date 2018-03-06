<?php
//universal variables
$authorFName = 'Greg';
$authorLName = 'Sargent';
$displayName = "$authorFName $authorLName";
$siteTagline = 'Interaction Designer';
$today = date('l');
$currentYear = date(Y);
$myTimeZone = date_default_timezone_set('America/Chicago');
$lastModified = "Last updated: " . date("M j g:ia", getlastmod());

//page specific variables
$pageTitle = 'Page Template';

?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo "$pageTitle"; ?></title>
  <meta name="description" content="A site for all my school projects and adventures.">
  <meta name="author" content="<?php echo "$displayName"; ?>">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="/css/scss/main.css">
</head>

<body>
  <header id="hero_section_large">
    <h1>Hold For School Projects Staging Site</h1>
  </header>
  <main>

  </main>
</body>
</html>
