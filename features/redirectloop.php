<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Redirect Loop');

  renderFeaturesTemplateStart(); 
 
?>

  <p>If a page redirects to itself, your Web Browser will detect this and stop processing the page. As a web crawler should only visit each unique URI once, it too should not be affected by an infinitely looping page.</p>

  <h3>Tests</h3>

<?php 

    echo createTestLink('Test', 'redirectlooptest.php');

?>
  
  <h3>Learn More</h3>

  <ul>
    <li><a href="<?php echo getWebCopyUserManualUrl('AdvSettingsRedirects') ?>">WebCopy Redirect Settings</a></li>
  </ul>

<?php renderFeaturesTemplateEnd(); ?>
