<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'URL Reference');

  renderCssTemplateStart('<link rel="stylesheet" type="text/css" href="../../assets/css/city7.css" />'); 
 
?>

  <p>The <code>url()</code> notation is used to designate external content in CSS property values. In this example, the image below is included via an external stylesheet.</p>
  
  <div class="city7"></div>

<?php renderCssTemplateEnd(); ?>
