<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'TLS/SSL certificates');

  renderFeaturesTemplateStart(); 
 
?>

  <p>Many websites are use TLS or SSL to prevent third parties from viewing or manipulating content transmitted to and from websites by encrypting the content. For example, payment information cannot be viewed when filling in checkout forms, and ISP's cannot alter HTML to inject their own content.</p>

  <p>Potential issues with TLS/SSL include host websites using insecure protocols such as SSL3, weak ciphers such as RC4 or even just expired or incorrectly configured certificates.</p>

  <p>WebCopy includes options allow you to configure which protocols can be used by the crawler, and also how to handle websites with invalid certificates.</p>

<?php 

    echo createTestLink('Invalid Certificate', 'https://badssl.demo.cyotek.com/');

?>
  
  <h3>Learn More</h3>

  <ul>
    <!-- <li><a href="<?php echo getWebCopyUserManualUrl('customheaders') ?>">WebCopy Custom Header Settings</a></li> -->
    <li><a href="<?php echo getWikipediaUrl('Public_key_certificate') ?>">More on Wikipedia</a></li>
  </ul>


<?php renderFeaturesTemplateEnd(); ?>
