<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Subdomains');

  renderFeaturesTemplateStart(); 
 
?>

  <p>The Domain Name System (DNS) has a tree structure or hierarchy, with each non-RR (resource record) node on the tree being a domain name. A <strong>subdomain</strong> is a domain that is part of a larger domain; the only domain that is not also a subdomain is the root domain.</p>

  <p><code>demo.cyotek.com</code> is a subdomain of <code>cyotek.com</code>, <code>sub.demo.cyotek.com</code> is a subdomain of <code>demo.cyotek.com</code>, however while <code>demo2.cyotek.com</code> is a subdomain of <code>cyotek.com</code> it is not a subdomain of <code>demo.cyotek.com</code>.</p>

  <h3>Tests</h3>

<?php 

    echo createTestLink('sub.demo.cyotek.com', 'http://sub.demo.cyotek.com');
    echo createTestLink('demo2.cyotek.com', 'http://demo2.cyotek.com');

?>
  
  <h3>Learn More</h3>

  <ul>
    <li><a href="<?php echo getWebCopyUserManualUrl('advsettingssubdomains') ?>">WebCopy Subdomain Settings</a></li>
  </ul>


<?php renderFeaturesTemplateEnd(); ?>
