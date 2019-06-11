<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Paths');

  renderFeaturesTemplateStart(); 
 
?>

<h3>Tests</h3>

<?php 

echo createTestLink('File 1 (Relative)', 'pathsfile1.php');
echo createTestLink('File 2 (Absolute)', getFullyQualifiedUrl('/features/pathsfile2.php'));
echo createTestLink('File 3 (Relative with traversal)', 'nodir/../pathsfile3.php');

?>
<?php renderFeaturesTemplateEnd(); ?>
