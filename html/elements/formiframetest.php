<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Form within IFrame Test');

  renderHtmlTemplateStart(); 
 
?>

 <p>A <strong>webform</strong>, <strong>web form</strong> or <strong>HTML form</strong> on a web page allows a user to enter data that is sent to a server for processing. Forms can resemble paper or database forms because web users fill out the forms using checkboxes, radio buttons, or text fields. For example, forms can be used to enter shipping or credit card data to order a product, or can be used to retrieve search results from a search engine.</p>

  <iframe src="iframeform.php" width="100%" height="400px" frameborder="0"></iframe>

<?php renderHtmlTemplateEnd(); ?>
