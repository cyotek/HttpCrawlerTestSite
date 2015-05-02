<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Redirect Chain');

  renderFeaturesTemplateStart(); 
 
?>

    <p>A redirect chain is where one redirects to another.</p>

    <p>To avoid infinite chains, the web crawler should break the chain after a given number of successive links.</p>

<h3>Tests</h3>

<?php 

    echo createTestLink('Test', 'redirectchaintest.php?index=1');

?>

  <h3>Learn More</h3>

  <ul>
    <li><a href="<?php echo getWebCopyUserManualUrl('AdvSettingsRedirects') ?>">WebCopy Redirect Settings</a></li>
  </ul>

<?php renderFeaturesTemplateEnd(); ?>
