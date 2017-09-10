<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Content Delivery Networks / Alternative Hosts');

  renderFeaturesTemplateStart(); 
 
?>

  <p>It is becoming more and more common to use Content Delivery Networks (CDN) to serve resources from multiple domains, often with completely different host names to the primary domain. In most cases external links would be excluded by crawls, but for resources required to use a website, they should be included.</p>

<?php 

    echo createTestLink('jQuery CDN', 'http://code.jquery.com/jquery-2.1.4.min.js');

?>
  
  <h3>Learn More</h3>

  <ul>
    <li><a href="<?php echo getWebCopyUserManualUrl('advhosts') ?>">WebCopy CDN Settings</a></li>
  </ul>


<?php renderFeaturesTemplateEnd(); ?>
