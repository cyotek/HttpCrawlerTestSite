<?php require_once __DIR__ . '/prepend.php';?>

<?php

if (!isset($_SESSION['username'])) {
  redirect(getFullyQualifiedUrl(getFeatureRelativeUrl() . 'authenticationform.php'));
}

$_SESSION = array();

if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
  );
}

session_destroy();

define('PAGE_TITLE', 'Log out');

renderFeaturesTemplateStart();

?>

<p>You are now logged out.</p>

<?php renderFeaturesTemplateEnd();?>
