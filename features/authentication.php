<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Authentication');

  renderFeaturesTemplateStart(); 
 
?>

<p>Many websites provide the ability to log into a private area with access to additional resources. While two- or multi-factor authentication is beyond the scope of this demonstration website, a demonstration using single-factor authentication via a form is available.</p>

<h3>Tests</h3>

<?php 
    echo createTestLink('Form Based', 'authenticationform.php');
?>

<h3>Learn More</h3>

<ul>
  <li><a href="<?php echo getWebCopyUserManualUrl('forms') ?>">WebCopy Form Settings</a></li>
  <li><a href="<?php echo getWebCopyUserManualUrl('passwords') ?>">WebCopy Password Settings</a></li>
</ul>

<?php renderFeaturesTemplateEnd(); ?>
