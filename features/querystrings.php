<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Query Strings');

  renderFeaturesTemplateStart(); 
 
?>

  <p>Query Strings are often used to determine what content to display in a page, where URL routing isn't being used. WebCopy currently treats any page with a different query string as a unique version of a page, and should therefore download and map all variants.</p>

  <h3>Tests</h3>

<?php 

    echo createTestLink('Alpha Testing', 'querystringstest.php?section=alpha');
    echo createTestLink('Beta Testing',  'querystringstest.php?section=beta');

?>
  
  <h3>Learn More</h3>

  <ul>
    <li><a href="<?php echo getWebCopyUserManualUrl('advsettingsquerystrings') ?>">WebCopy Query String Settings</a></li>
  </ul>

<?php renderFeaturesTemplateEnd(); ?>
