<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Default Documents');

  renderFeaturesTemplateStart(); 
 
?>

  <p>Web servers offer the concept of a default document, so when you navigate to a sub level of a site without including a document name, the correct document will be displayed. This means two different unique URI's can actually point to the same resource, and should be handled accordingly.</p>

<h3>Tests</h3>

<?php 

    echo createTestLink('Home Page without document name', '/');
    echo createTestLink('Home Page with document name', '/index.php');

?>

<?php renderFeaturesTemplateEnd(); ?>
