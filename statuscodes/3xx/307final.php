<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', '307 Temporary Redirect');

  renderStatusCodesTemplateStart(); 
 
?>
  <h1><?php echo PAGE_TITLE ?></h1>

  <p>This page serves no purpose other than being the final destination of a 307 redirect.</p>

<?php renderStatusCodesTemplateEnd(); ?>
