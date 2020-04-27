<?php require_once __DIR__ . '/prepend.php'; ?>

<?php

if (!function_exists('apache_request_headers')) {
  // https://stackoverflow.com/a/9276269/148962
  function apache_request_headers()
  {
    $arh = array();
    $rx_http = '/\AHTTP_/';
    foreach ($_SERVER as $key => $val) {
      if (preg_match($rx_http, $key)) {
        $arh_key = preg_replace($rx_http, '', $key);
        $rx_matches = array();
        // do some nasty string manipulations to restore the original letter case
        // this should work in most cases
        $rx_matches = explode('_', $arh_key);
        if (count($rx_matches) > 0 and strlen($arh_key) > 2) {
          foreach ($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
          $arh_key = implode('-', $rx_matches);
        }
        $arh[$arh_key] = $val;
      }
    }
    return ($arh);
  }
}

define('PAGE_TITLE', 'Request Headers');

renderFeaturesTemplateStart();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<p>HTTP header fields are components of the header section of request and response messages in the Hypertext Transfer Protocol (HTTP). They define the operating parameters of an HTTP transaction.</p>

<p>The headers provided when requesting this page were</p>

<?php printArray(apache_request_headers()); ?>

<h3>Learn More</h3>

<ul>
  <li><a href="<?php echo getWebCopyUserManualUrl('customheaders') ?>">WebCopy Custom Header Settings</a></li>
</ul>

<?php renderFeaturesTemplateEnd(); ?>