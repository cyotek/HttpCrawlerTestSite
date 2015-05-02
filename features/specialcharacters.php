<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Special Characters');

  renderFeaturesTemplateStart(); 
 
?>

  <p>The number of characters available to computer users is over 100,000 - yet an individual URI can use only a tiny fraction of these. Extended characters must be encoded.</p>

  <h3>Tests</h3>

<?php 

    echo createTestLink('Hash Character Test', 'specialcharacters-%23.php');
    echo createTestLink('Polish Character Test', 'specialcharacters-%C4%99.html');

?>

<?php renderFeaturesTemplateEnd(); ?>
