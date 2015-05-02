<?php 
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="WebCopyDemo"');
    header('HTTP/1.0 401 Unauthorized');
    die('Sorry, you are not authorized to view this resource.');
} 
?>

<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', '401 Unauthorized (Basic)');

  renderStatusCodesTemplateStart(); 
 
?>
  <h1><?php echo PAGE_TITLE ?></h1>

  <p>This page tests that WebCopy can handle 401 challenge authentication using the basic access authentication scheme.</p>

<dl>
  <dt>User name</dt>
  <dd><?php echo $_SERVER['PHP_AUTH_USER'] ?></dd>
  <dt>Password</dt>
  <dd><?php echo $_SERVER['PHP_AUTH_PW'] ?></dd>
</dl>


<?php renderStatusCodesTemplateEnd(); ?>
