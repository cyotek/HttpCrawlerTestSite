<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HEAD Method');

  renderHttpMethodsTemplateStart(); 
 
?>

    <p>The <code>HEAD</code> method asks for a response identical to that of a GET request, but without the response body. This is useful for retrieving meta-information written in response headers, without having to transport the entire content. Some servers may not support the <code>HEAD</code> method.</p>

  <h3>Tests</h3>

<?php 

    echo createTestLink('Not supported response', 'headtest.php');

?> 

  <h3>Learn More</h3>

<ul>
  <li><a href="<?php echo getWebCopyUserManualUrl('advsettingsheaderchecking') ?>">WebCopy HEAD Settings</a></li>
</ul>

<?php renderHttpMethodsTemplateEnd(); ?>
