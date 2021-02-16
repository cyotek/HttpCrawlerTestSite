<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Referer Header');

  renderFeaturesTemplateStart(); 
 
?>

<p>The HTTP referer (a misspelling of referrer) is an optional HTTP
  header field that identifies the address of the webpage (i.e., the URI or
  IRI) which is linked to the resource being requested. By checking the
  referrer, the new webpage can see where the request originated.</p>

<p>Although this header has many innocent uses it can have undesirable
  consequences for user security and privacy.</p>

<p>The referrer used to request this page was:</p>

<p>
  <pre><code><?php echo $_SERVER['HTTP_REFERER'] ?></code></pre>
</p>

<h3>Tests</h3>

<?php 

    echo createTestLink('Block Test', 'refererblocktest.php');

?>

<h3>Learn More</h3>

<ul>
  <li><a
      href="<?php echo getWebCopyUserManualUrl('customheaders') ?>">WebCopy
      Custom Header Settings</a></li>
</ul>

<?php renderFeaturesTemplateEnd(); ?>
