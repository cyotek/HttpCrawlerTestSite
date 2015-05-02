<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'User Agent');

  renderFeaturesTemplateStart(); 
 
?>

  <p>Some websites use user agent sniffing in order to determine which content to return.</p>

  <p>The user agent used to request this page was:</p>

  <p>
    <strong><?php echo $_SERVER['HTTP_USER_AGENT'] ?></strong>
  </p>

  <h3>Learn More</h3>

  <ul>
    <li><a href="<?php echo getWebCopyUserManualUrl('AdvSettingsUserAgent') ?>">WebCopy User Agent Settings</a></li>
  </ul>

<?php renderFeaturesTemplateEnd(); ?>
