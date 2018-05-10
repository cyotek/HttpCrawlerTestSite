<?php require_once __DIR__ . '/prepend.php';?>

<?php

if (!isset($_SESSION['username'])) {
  redirect(getFullyQualifiedUrl(getFeatureRelativeUrl() . 'authenticationform.php'));
}

define('PAGE_TITLE', 'Log in');

renderFeaturesTemplateStart();

?>

<p>You are now logged in</p>

<?php renderFeaturesTemplateEnd();?>
