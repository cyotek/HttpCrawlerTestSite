<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Frameset');

  renderHtmlTemplateStart(); 
 
?>

  <p>The <code>&lt;frameset&gt;</code> element allows a HTML layout to be created out of multiple frames, each with their own source documents. Very obsolete in this day and age, but some sites still use them.</p>
  
  <h3>Tests</h3>

<?php 

    echo createTestLink('Frameset Test', 'framesettest.php');

?>
<?php renderHtmlTemplateEnd(); ?>
