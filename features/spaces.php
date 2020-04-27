<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Spaces in URLs');

  renderFeaturesTemplateStart(); 
 
?>

<p>Some URIs include spaces or other special characters, which are then
  encoded to make the URI valid. For example, a space character is encoded
  as <code>%20</code>, which is the hexadecimal value for 32, in turn the
  ASCII character code for a space.</p>

<h3>Tests</h3>

<?php 

    echo createTestLink('Test', 'sub%20folder\page%20with%20spaces.php');

?>

<?php renderFeaturesTemplateEnd(); ?>
