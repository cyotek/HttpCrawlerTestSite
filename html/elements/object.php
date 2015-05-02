<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Object');

  renderHtmlTemplateStart(); 
 
?>

  <p>The <code>object</code> tag defines an embedded object within an HTML document. Often used to embed Flash, this example displays a normal image.</p>
  
  <object width="160" height="160" data="/assets/img/city3.png"></object>

<?php renderHtmlTemplateEnd(); ?>
