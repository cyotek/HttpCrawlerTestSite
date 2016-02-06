<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Image');

  renderHtmlTemplateStart(); 
 
?>

  <p>The <code>&lt;img&gt;</code> element defines an image in a HTML page.</p>
  
  <img src="/assets/img/city1.png" alt="Alpha Upon Beta" />
  <img src="/assets/img/city2.png" alt="Gamma City" />

<?php renderHtmlTemplateEnd(); ?>
