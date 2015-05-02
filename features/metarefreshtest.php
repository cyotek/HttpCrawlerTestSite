<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Meta Refresh');

  renderFeaturesTemplateStart('<meta http-equiv="refresh" content="5; url=metarefreshfinal.php">'); 
 
?>

  <p>This page will automatically redirect in 5 seconds.</p>

<?php renderFeaturesTemplateEnd(); ?>
