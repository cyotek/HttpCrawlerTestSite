<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Frame2');

  renderCoreTemplateStart(); 
 
?>

  <div class="single-column">

    <p>Second frame.</p>

    <p><img src="/assets/img/city12.png" alt="city12"/></p>

    <p><a href="frameset.php" class="btn" target="_top">Back to main demo</a></p>

  </div>

  
<?php renderCoreTemplateEnd(); ?>
