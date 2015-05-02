<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Inline Frame');

  renderHtmlTemplateStart(); 
 
?>

  <p>The <code>iframe</code> tag specifies an in-line frame.</p>
  
  <iframe src="iframetest.php"></iframe>

<?php renderHtmlTemplateEnd(); ?>
