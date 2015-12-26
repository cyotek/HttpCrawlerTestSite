<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Import At-Rule');

  renderCssTemplateStart('<link rel="stylesheet" type="text/css" href="../../assets/css/import.css" />'); 
 
?>

  <p>The <code>@import</code> at-rule is used is used to import style rules from other style sheets. In this example, the image below is included via an external stylesheet which in turn imports another stylesheet.</p>
  
  <div class="city8"></div>

<?php renderCssTemplateEnd(); ?>
