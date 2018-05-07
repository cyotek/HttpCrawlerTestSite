<?php require_once __DIR__ . '/prepend.php';?>

<?php

define('PAGE_TITLE', 'Custom Action Form Test');

renderHtmlTemplateStart();

if (isset($_POST['submit'])) {
  printPostList();
}

renderHtmlTemplateEnd();

?>
