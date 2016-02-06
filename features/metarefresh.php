<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Meta Refresh');

  renderFeaturesTemplateStart(); 
 
?>

  <p>Meta refresh is a method of instructing a web browser to automatically refresh the current web page or frame after a given time interval, using an HTML <code>&lt;meta&gt;</code> element with the <code>http-equiv</code> parameter set to "<code>refresh</code>" and a <code>content</code> parameter giving the time interval in seconds. It is also possible to instruct the browser to fetch a different URL when the page is refreshed, by including the alternative URL in the <code>content</code> parameter.</p>
  
<h3>Tests</h3>

<?php 

    echo createTestLink('Test', 'metarefreshtest.php');

?>

<?php renderFeaturesTemplateEnd(); ?>
