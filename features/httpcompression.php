<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HTTP Compression');

  renderFeaturesTemplateStart(); 
?>

<p>The <code>Content-Encoding</code> representation header lists any
  encodings that have been applied to the response, and in what order.
  Content encoding is mainly used to compress the message data without
  losing information about the origin media type.</p>

<p>A web crawler can hint at what encoding methods it supports via the
  <code>Accept-Encoding</code> header, however a web server may ignore any
  provided values.</p>

<p>The below demonstration pages return a sample HTML page compressed with
  the specified algorithm. Note that your browser may not understand some
  encodings.</p>

<div class="flash flash-warn">
  WebCopy only supports decoding / decompressing the types listed below,
  however it has been observed that some web servers return non-standard. If
  you come across different encodings, please send the URL of the
  resource to support@cyotek.com referencing issue #471.
</div>

<h3>Tests</h3>

<?php 
  echo createTestLink('br', 'httpcompression-brotli.php');
  echo createTestLink('bzip2', 'httpcompression-bzip2.php');
  echo createTestLink('compress', 'httpcompression-compress.php');
  echo createTestLink('deflate', 'httpcompression-deflate.php');
  echo createTestLink('gzip', 'httpcompression-gzip.php');
  echo createTestLink('x-compress', 'httpcompression-x-compress.php');
  echo createTestLink('x-gzip', 'httpcompression-x-gzip.php');
?>

<h3>Learn More</h3>

<ul>
  <li><a
      href="<?php echo getWebCopyUserManualUrl('advsettingscompression') ?>">WebCopy
      HTTP Compression Settings</a></li>
</ul>

<?php renderFeaturesTemplateEnd(); ?>
