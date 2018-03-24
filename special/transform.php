<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Subdomains');

  renderFeaturesTemplateStart(); 
 
?>

  <h3>Tests</h3>

<?php 

    echo createTestLink('sub.demo.cyotek.com', 'http://example.com/special/transformfinal.php');

?>
  


<?php renderFeaturesTemplateEnd(); ?>
