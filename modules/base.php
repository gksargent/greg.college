<?php
$authorFName = 'Greg';
$authorLName = 'Sargent';
$displayName = "$authorFName $authorLName";
$siteTagline = 'Interaction Designer';
$today = date('l');
$currentYear = date(Y);
$myTimeZone = date_default_timezone_set('America/Chicago');
$lastModified = "Last updated: " . date("M j g:ia", getlastmod());
?>
