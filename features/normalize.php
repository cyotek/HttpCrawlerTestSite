<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'URL Normalization');

  renderFeaturesTemplateStart(); 
 
?>

  <p><strong>URL normalization</strong> (or <strong>URL canonicalization</strong>) is the process by which URLs are modified and standardized in a consistent manner. The goal of the normalization process is to transform a URL into a normalized or canonical URL so it is possible to determine if two syntactically different URLs may be equivalent.</p>

  <h3>Canonical link element</h3>

  <p>A <strong>canonical link element</strong> is an HTML element that helps webmasters prevent duplicate content issues by specifying the "canonical", or "preferred", version of a web page as part of search engine optimization.</p>

  <ul>
    <li><a href="canonical.php">Canonical Test 1</a></li>
    <li><a href="canonical.php?sortOrder=alphabetical">Canonical Test 2</a></li>
  </ul>

<?php renderFeaturesTemplateEnd(); ?>
