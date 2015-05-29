<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Canonical link element');

  renderFeaturesTemplateStart('<link rel="canonical" href="' . getFullyQualifiedUrl('/features/canonical.php') . '">'); 
 
?>

  <p>This page serves no purpose other than testing the <code>rel="canonical"</code> attribute.</p>

<?php renderFeaturesTemplateEnd(); ?>
