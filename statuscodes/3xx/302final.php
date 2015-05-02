<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', '302 Found');

  renderStatusCodesTemplateStart(); 
 
?>
  <h1><?php echo PAGE_TITLE ?></h1>

  <p>This page serves no purpose other than being the final destination of a 302 redirect.</p>

<?php renderStatusCodesTemplateEnd(); ?>
