<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Inline Frame');

  renderHtmlTemplateStart(); 
 
?>

  <p>The <code>&lt;iframe&gt;</code> element specifies an in-line frame.</p>
  
  <iframe src="iframetest.php"></iframe>

<?php renderHtmlTemplateEnd(); ?>
