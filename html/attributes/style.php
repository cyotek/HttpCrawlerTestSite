<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Style Attribute');

  renderHtmlTemplateStart(); 
 
?>

  <p>The <code>style</code> attribute specifies an in-line style for an element. As in-line CSS could include image references, the CSS should be parsed accordingly.</p>

  <div style="background-image: url('/assets/img/background1.png'); background-repeat: repeat-x; height: 200px;"></div>

<?php renderHtmlTemplateEnd(); ?>
