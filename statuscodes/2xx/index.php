<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HTTP Status Codes');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>This class of status codes indicates the action requested by the client was received, understood, accepted and processed successfully.</p>

    <div class="flash">
      There are currently no 2xx specific tests available.
    </div>
  
  </div>

<?php renderTemplateEnd(); ?>
