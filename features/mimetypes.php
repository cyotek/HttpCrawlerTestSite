<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Mime types and meta data');

  renderFeaturesTemplateStart(); 
 
?>

  <p>There are any number of file types that can be downloaded via the internet. Some are more common than others, and some can also include meta data of their own. Some web crawlers may recognize certain mime types and attempt to extract relevant meta data.</p>

<h3>Tests</h3>

<?php 

    echo createTestLink('Sample PDF', '/files/samplepdf.pdf');

?>

<?php renderFeaturesTemplateEnd(); ?>
