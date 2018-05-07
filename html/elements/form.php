<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Form');

  renderHtmlTemplateStart(); 
 
?>

  <p>The <code>&lt;form&gt;</code> element is used to create an HTML form for user input. Forms can resemble paper or database forms because web users fill out the forms using checkboxes, radio buttons, or text fields. For example, forms can be used to enter shipping or credit card data to order a product, or can be used to retrieve search results from a search engine.</p>

  <h3>Tests</h3>

<?php 

    echo createTestLink('Basic'             , 'formtest.php');
    echo createTestLink('All Elements'      , 'formelementstest.php');
    echo createTestLink('Custom Action'     , 'formactiontest.php');
    echo createTestLink('Embedded in IFrame', 'formiframetest.php');
    echo createTestLink('Multiple Forms'    , 'formmultipletest.php');

?>

  
<?php renderHtmlTemplateEnd(); ?>
