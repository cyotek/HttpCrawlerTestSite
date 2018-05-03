<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Form');

  renderHtmlTemplateStart(); 
 
?>

  <p>The <code>&lt;form&gt;</code> element is used to create an HTML form for user input.</p>

  <h3>Tests</h3>

<?php 

    echo createTestLink('Form Test', 'formtest.php');
    echo createTestLink('Form Test (IFrame)', 'formiframetest.php');
    echo createTestLink('Form Test (Elements)', 'formelementstest.php');

?>

  
<?php renderHtmlTemplateEnd(); ?>
