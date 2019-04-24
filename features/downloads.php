<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Downloads');

  renderFeaturesTemplateStart(); 
 
?>

  <p>Websites may offer a variety of files to download, of different types and sizes - being able to exclude files by type or size can be benificial.</p>

  <div class="flash flash-warn">
    Files generated via this page do not contain valid content.
  </div>

  <h3>Tests</h3>

<?php 

echo createTestLink('Text File (1 KB)', 'downloadtest.php?type=text/plain&filename=small.txt&size=1024');
echo createTestLink('Text File (10 KB)', 'downloadtest.php?type=text/plain&filename=large.txt&size=10240');
echo createTestLink('JPEG Image (10 KB)', 'downloadtest.php?type=image/jpeg&filename=small.jpg&size=10240');
echo createTestLink('JPEG Image (1 MB)', 'downloadtest.php?type=image/jpeg&filename=large.jpg&size=1048576');
echo createTestLink('Archive (1 MB)', 'downloadtest.php?type=application/zip&filename=small.zip&size=1048576');
echo createTestLink('Archive (10 MB)', 'downloadtest.php?type=application/zip&filename=large.zip&size=10485760');
echo createTestLink('DVD (8 GB)', 'downloadtest.php?type=application/octet-stream&filename=dvd.iso&size=8589934592');

?>
  
  <h3>Learn More</h3>

  <ul>
    <li><a href="<?php echo getWebCopyUserManualUrl('downloadlimits') ?>">WebCopy Download Limits Settings</a></li>
  </ul>

<?php renderFeaturesTemplateEnd(); ?>
