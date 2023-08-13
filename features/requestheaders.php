<?php require_once __DIR__ . '/prepend.php'; ?>

<?php
define('PAGE_TITLE', 'Request Headers');

renderFeaturesTemplateStart();
?>

<p>HTTP header fields are components of the header section of request and response messages in the Hypertext Transfer Protocol (HTTP). They define the operating parameters of an HTTP transaction.</p>

<p>The headers provided when requesting this page were</p>

<?php printArray(apache_request_headers()); ?>

<h3>Learn More</h3>

<ul>
  <li><a href="<?php echo getWebCopyUserManualUrl('customheaders') ?>">WebCopy Custom Header Settings</a></li>
</ul>

<?php renderFeaturesTemplateEnd(); ?>