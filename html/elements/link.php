<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Link');

  renderHtmlTemplateStart('<link rel="alternate" type="application/rss+xml" title="RSS" href="/rss/" /><link rel="stylesheet" href="/assets/css/custom.css">'); 
 
?>

  <p>The <code>&lt;link&gt;</code> element defines a link between a document and an external resource.</p>
  
  <p>This element is most commonly used for style sheets and fav icons.</p>

  <p>This page contains <code>&lt;link&gt;</code> elements pointing to a set of style sheets, a fav icon and a RSS feed.</p>

<?php renderHtmlTemplateEnd(); ?>
