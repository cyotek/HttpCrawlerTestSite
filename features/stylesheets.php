<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Style Sheets');

  renderFeaturesTemplateStart('<link rel="stylesheet" href="/assets/css/custom.css">'); 
 
?>

  <p>As style sheets can include resources to other documents, such as the image displayed at the bottom of this page, web crawlers need to pull out any such links from the CSS.</p>


<?php renderFeaturesTemplateEnd(); ?>
