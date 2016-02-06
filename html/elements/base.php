<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Base');

  renderHtmlTemplateStart('<base href="' . getFullyQualifiedUrl('/assets/img/') . '" />'); 

?>

  <p>The <code>&lt;base&gt;</code> element specifies the base URL/target for all relative URLs in a document.</p>
  
  <img alt="Faded" src="city4.png" />

<?php renderHtmlTemplateEnd(); ?>
