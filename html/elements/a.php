<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Anchor');

  renderHtmlTemplateStart(); 
 
?>

  <p>The <code>&lt;a&gt;</code> element defines a hyper-link, which is used to link from one page to another.</p>
  
  <ul>
    <li><a href="/">Home Page</a></li>
    <li><a href="/statuscodes/index.php">HTTP Status Codes</a></li>
  </ul>

<?php renderHtmlTemplateEnd(); ?>
