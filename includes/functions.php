<?php

define('SITE_TITLE', 'HTTP Crawler Test Site');

define('WEBSITE_VERSION', '1.29.1');

session_start();

require_once LIBDIR . 'templatefunctions.php';

function createNavigationLink($text, $ref, $useOnClickEvent = false)
{
  $className = 'menu-item';
  $baseName = pathinfo($ref, PATHINFO_DIRNAME) . '/' . pathinfo($ref, PATHINFO_FILENAME);

  if (substr_compare($_SERVER['PHP_SELF'], $baseName, 0, strlen($baseName)) == 0) {
    $className = $className . ' selected';
  }

  if ($useOnClickEvent == false) {
    echo '<a class="' . $className . '" href="' . $ref . '">';
  } else {
    echo '<a class="' . $className . '" href="#" onclick="window.location=\'' . $ref . '\'">';

  }
  echo $text;
  echo '</a>';
  echo "\n";
}

function getWebCopyUserManualUrl($helpTopic)
{
  return 'http://docs.cyotek.com/cyowcopy/current/' . $helpTopic . '.html';
}

function getWikipediaUrl($topic)
{
  return 'https://en.wikipedia.org/wiki/' . $topic;
}

function addStatusCodeInformationTable($statusCode, $tests = null, $helpTopic = null)
{
  $wikiUrl = getWikipediaUrl('List_of_HTTP_status_codes#' . $statusCode);
  $rfcUrl = '';
  $description = getLongHttpDescription($statusCode);

  if ($tests == null) {
    $tests = array('Test' => $statusCode . 'test.php');
  }

  echo '<p>' . $description . '</p>' . "\n";

  renderH3('Tests');
  foreach ($tests as $key => $value) {
    echo createTestLink($key, $value);
  }
  unset($value);
  unset($key);

  renderH3('Learn More');
  echo '<ul>'. "\n";
  echo '<li><a href="' . $wikiUrl . '">Wikipedia</a></li>' . "\n";
  if ($helpTopic != null) {
    echo '<li><a href="' . getWebCopyUserManualUrl($helpTopic) . '">Related WebCopy Documentation</a></li>' . "\n";
  }
  echo '</ul>'. "\n";
}

function createTestLink($title, $ref)
{
  return '<a href="' . $ref . '" class="btn" title="' . $ref . '">' . $title . '</a>' . "\n";
}

function getHttpDescriptionWithCode($statusCode)
{
  return $statusCode . ' ' . getHttpDescription($statusCode);
}

function getHttpDescription($statusCode)
{
  switch ($statusCode) {
    case 100:
      $result = 'Continue';
      break;
    case 101:
      $result = 'Switching Protocols';
      break;

    case 200:
      $result = 'OK';
      break;
    case 201:
      $result = 'Created';
      break;
    case 202:
      $result = 'Accepted';
      break;

    case 300:
      $result = 'Multiple Choices';
      break;
    case 301:
      $result = 'Moved Permanently';
      break;
    case 302:
      $result = 'Found';
      break;
    case 303:
      $result = 'See Other';
      break;
    case 304:
      $result = 'Not Modified';
      break;
    case 307:
      $result = 'Temporary Redirect';
      break;
    case 308:
      $result = 'Permanent Redirect';
      break;

    case 400:
      $result = 'Bad Request';
      break;
    case 401:
      $result = 'Not Authorized';
      break;
    case 403:
      $result = 'Forbidden';
      break;
    case 404:
      $result = 'Not Found';
      break;
    case 405:
      $result = 'Method Not Allowed';
      break;
    case 406:
      $result = 'Not Acceptable';
      break;
    case 407:
      $result = 'Proxy Authentication Required';
      break;
    case 408:
      $result = 'Request Timeout';
      break;
    case 409:
      $result = 'Conflict';
      break;
    case 410:
      $result = 'Gone';
      break;
    case 429:
      $result = 'Too Many Requests';
      break;

    case 500:
      $result = 'Internal Server Error';
      break;
    case 501:
      $result = 'Not Implemented';
      break;
    case 502:
      $result = 'Bad Gateway';
      break;
    case 503:
      $result = 'Service Unavailable';
      break;
    case 504:
      $result = 'Gateway Timeout';
      break;
    case 505:
      $result = 'HTTP Version Not Supported';
      break;

    default:
      $result = $statusCode;
      break;
  }

  return $result;
}

function getLongHttpDescription($statusCode)
{
  switch ($statusCode) {
    case 300:
      $result = 'Indicates multiple options for the resource that the client may follow. It, for instance, could be used to present different format options for video, list files with different extensions, or word sense disambiguation.';
      break;
    case 301:
      $result = 'This and all future requests should be directed to the given URI.';
      break;
    case 302:
      $result = 'This is an example of industry practice contradicting the standard. The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect (the original describing phrase was "Moved Temporarily"),[6] but popular browsers implemented 302 with the functionality of a 303 See Other. Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours.';
      break;
    case 303:
      $result = 'The response to the request can be found under another URI using a GET method. When received in response to a POST (or PUT/DELETE), it should be assumed that the server has received the data and the redirect should be issued with a separate GET message.';
      break;
    case 304:
      $result = 'Indicates that the resource has not been modified since the version specified by the request headers If-Modified-Since or If-None-Match. This means that there is no need to retransmit the resource, since the client still has a previously-downloaded copy.';
      break;
    case 307:
      $result = 'In this case, the request should be repeated with another URI; however, future requests should still use the original URI. In contrast to how 302 was historically implemented, the request method is not allowed to be changed when reissuing the original request. For instance, a POST request should be repeated using another POST request.';
      break;
    case 308:
      $result = 'The request, and all future requests should be repeated using another URI. 307 and 308 (as proposed) parallel the behaviours of 302 and 301, but do not allow the HTTP method to change. So, for example, submitting a form to a permanently redirected resource may continue smoothly.';
      break;

    case 400:
      $result = 'The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing).';
      break;
    case 401:
      $result = 'Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource.';
      break;
    case 403:
      $result = 'The request was a valid request, but the server is refusing to respond to it. Unlike a 401 Unauthorized response, authenticating will make no difference.';
      break;
    case 404:
      $result = 'The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.';
      break;
    case 405:
      $result = 'A request was made of a resource using a request method not supported by that resource; for example, using GET on a form which requires data to be presented via POST, or using PUT on a read-only resource.';
      break;
    case 406:
      $result = 'The requested resource is only capable of generating content not acceptable according to the Accept headers sent in the request.';
      break;
    case 407:
      $result = 'The client must first authenticate itself with the proxy.';
      break;
    case 408:
      $result = 'The server timed out waiting for the request. According to HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time."';
      break;
    case 409:
      $result = 'Indicates that the request could not be processed because of conflict in the request, such as an edit conflict in the case of multiple updates.';
      break;
    case 410:
      $result = 'Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource again in the future.';
      break;
    case 429:
      $result = 'The user has sent too many requests in a given amount of time.';
      break;

    case 500:
      $result = 'A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.';
      break;
    case 501:
      $result = 'The server either does not recognize the request method, or it lacks the ability to fulfil the request. Usually this implies future availability (e.g., a new feature of a web-service API).';
      break;
    case 502:
      $result = 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.';
      break;
    case 503:
      $result = 'The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state.';
      break;
    case 504:
      $result = 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.';
      break;
    case 505:
      $result = 'The server does not support the HTTP protocol version used in the request.';
      break;

    default:
      $result = $statusCode;
      break;
  }

  return $result;
}

function getHttpStatusCodeRelativeUrl($statusCode)
{
  return '/statuscodes/' . substr($statusCode, 0, 1) . 'xx/';
}

function renderHttpStatusTestPage($statusCode, $tests = null, $helpTopic = null)
{

  define('PAGE_TITLE', getHttpDescriptionWithCode($statusCode));

  renderStatusCodesTemplateStart();

  addStatusCodeInformationTable($statusCode, $tests, $helpTopic);

  renderStatusCodesTemplateEnd();
}

function createHttpNavBar($header = null, $codes, $useOnClickEvent = false)
{

  echo '<nav class="menu docs-menu">'. "\n";

  if ($header != null) {
    echo '<span class="menu-heading">' . $header . '</span>' . "\n";
  }

  foreach ($codes as $value) {
    createNavigationLink(getHttpDescriptionWithCode($value), getHttpStatusCodeRelativeUrl($value) . $value . '.php', $useOnClickEvent);
  }
  unset($value);

  echo '</nav>'. "\n";
}

function createFullHttpNavBar()
{
  createHttp3xxNavBar(true);
  createHttp4xxNavBar(true);
  createHttp5xxNavBar(true);
}

function createHttp3xxNavBar($includeHeader = false)
{
  if ($includeHeader) {
    $header = '3xx Redirection';
  } else {
    $header = null;
  }

  createHttpNavBar($header, array(300, 301, 302, 303, 304, 307, 308));
}

function createHttp4xxNavBar($includeHeader = false)
{
  if ($includeHeader) {
    $header = '4xx Client Error';
  } else {
    $header = null;
  }

  createHttpNavBar($header, array(400, 401, 403, 404, 405/**, 406, 407, 408, 409, 410, 429 **/), true);
}

function createHttp5xxNavBar($includeHeader = false)
{
  if ($includeHeader) {
    $header = '5xx Server Error';
  } else {
    $header = null;
  }

  createHttpNavBar($header, array(500, 501, 502, 503, 504, 505), true);
}

function getFeatureRelativeUrl()
{
  return '/features/';
}

function getHttpMethodRelativeUrl()
{
  return '/methods/';
}

function createHttpMethodsNavBar()
{
  echo '<nav class="menu docs-menu">'. "\n";

  createNavigationLink('HEAD', getHttpMethodRelativeUrl() . 'head.php');
  createNavigationLink('POST', getHttpMethodRelativeUrl() . 'post.php');

  echo '</nav>'. "\n";
}

function createFeaturesNavBar()
{
  echo '<nav class="menu docs-menu">'. "\n";

  createNavigationLink('Authentication', getFeatureRelativeUrl() . 'authentication.php');
  createNavigationLink('CDN / Alternative Hosts', getFeatureRelativeUrl() . 'cdn.php');
  createNavigationLink('Certificates', getFeatureRelativeUrl() . 'certificates.php');
  createNavigationLink('Cookies', getFeatureRelativeUrl() . 'cookies.php');
  createNavigationLink('Default Document', getFeatureRelativeUrl() . 'defaultdocuments.php');
  createNavigationLink('Downloads', getFeatureRelativeUrl() . 'downloads.php');
  createNavigationLink('Image Formats', getFeatureRelativeUrl() . 'imageformats.php');
  createNavigationLink('Meta Refresh', getFeatureRelativeUrl() . 'metarefresh.php');
  createNavigationLink('Mime types and meta data', getFeatureRelativeUrl() . 'mimetypes.php');
  createNavigationLink('Paths', getFeatureRelativeUrl() . 'paths.php');
  createNavigationLink('Query Strings', getFeatureRelativeUrl() . 'querystrings.php');
  createNavigationLink('Redirect Chain', getFeatureRelativeUrl() . 'redirectchain.php', true);
  createNavigationLink('Redirect Loop', getFeatureRelativeUrl() . 'redirectloop.php');
  createNavigationLink('Referer Header', getFeatureRelativeUrl() . 'referrer.php');
  createNavigationLink('Request Headers', getFeatureRelativeUrl() . 'requestheaders.php');
  createNavigationLink('Spaces in URLs', getFeatureRelativeUrl() . 'spaces.php');
  createNavigationLink('Special Characters', getFeatureRelativeUrl() . 'specialcharacters.php');
  createNavigationLink('Subdomains', getFeatureRelativeUrl() . 'subdomains.php');
  createNavigationLink('URL Normalization', getFeatureRelativeUrl() . 'normalize.php');
  createNavigationLink('User Agent', getFeatureRelativeUrl() . 'useragent.php');

  echo '</nav>'. "\n";
}

function createCssFeaturesNavBar()
{
  echo '<nav class="menu docs-menu">'. "\n";

  createNavigationLink('@import', getCssRelativeUrl() . 'import.php');
  createNavigationLink('Data URIs', getCssRelativeUrl() . 'datauri.php');
  createNavigationLink('url()', getCssRelativeUrl() . 'url.php');

  echo '</nav>'. "\n";
}

function createJavaScriptFeaturesNavBar()
{
  echo '<nav class="menu docs-menu">'. "\n";

  createNavigationLink('Attribute Transformation', getJavaScriptRelativeUrl() . 'uritransform.php');
  createNavigationLink('DOM Modification', getJavaScriptRelativeUrl() . 'dom.php');

  echo '</nav>'. "\n";
}

function getHtmlRelativeUrl()
{
  return '/html/';
}

function getCssRelativeUrl()
{
  return '/css/';
}

function getJavaScriptRelativeUrl()
{
  return '/javascript/';
}

function createCssNavBar()
{
  createCssFeaturesNavBar();
}

function createJavaScriptNavBar()
{
  createJavaScriptFeaturesNavBar();
}

function createHtmlNavBar()
{
  createHtmlElementsNavBar(true);
  createHtmlAttributesNavBar(true);
}

function createHtmlElementsNavBar($includeHeader = false)
{
  echo '<nav class="menu docs-menu">'. "\n";

  if ($includeHeader) {
    echo '<span class="menu-heading">Elements</span>' . "\n";
  }

  createNavigationLink('Anchor', getHtmlRelativeUrl() . 'elements/a.php');
  createNavigationLink('Base', getHtmlRelativeUrl() . 'elements/base.php');
  createNavigationLink('Form', getHtmlRelativeUrl() . 'elements/form.php');
  createNavigationLink('Frameset', getHtmlRelativeUrl() . 'elements/frameset.php');
  createNavigationLink('Image', getHtmlRelativeUrl() . 'elements/img.php');
  createNavigationLink('Inline Frame', getHtmlRelativeUrl() . 'elements/iframe.php');
  createNavigationLink('Link', getHtmlRelativeUrl() . 'elements/link.php');
  createNavigationLink('Meta', getHtmlRelativeUrl() . 'elements/meta.php');
  createNavigationLink('Object', getHtmlRelativeUrl() . 'elements/object.php');
  createNavigationLink('Picture', getHtmlRelativeUrl() . 'elements/picture.php');
  createNavigationLink('Style', getHtmlRelativeUrl() . 'elements/style.php');

  echo '</nav>'. "\n";
}

function createHtmlAttributesNavBar($includeHeader = false)
{
  echo '<nav class="menu docs-menu">'. "\n";

  if ($includeHeader) {
    echo '<span class="menu-heading">Attributes</span>' . "\n";
  }

  createNavigationLink('Custom', getHtmlRelativeUrl() . 'attributes/custom.php');
  createNavigationLink('SrcSet', getHtmlRelativeUrl() . 'attributes/srcset.php');
  createNavigationLink('Style', getHtmlRelativeUrl() . 'attributes/style.php');

  echo '</nav>'. "\n";
}

function getBaseUrl()
{
  return getRequestProtocol() . $_SERVER['HTTP_HOST'];
}

function getRequestProtocol()
{
  if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $protocol = 'https://';
  } elseif (isset($_SERVER['REQUEST_SCHEME'])) {
    $protocol = $_SERVER['REQUEST_SCHEME'] . '://';
  } else {
    $protocol = 'http://';
  }
  return $protocol;
}

function getFullyQualifiedUrl($relativeUri)
{
  return getBaseUrl() . $relativeUri;
}

function getGUID()
{
  if (function_exists('com_create_guid')) {
    return com_create_guid();
  } else {
    mt_srand((double) microtime() * 10000); //optional for php 4.2.0 and up.
    $charid = strtoupper(md5(uniqid(rand(), true)));
    $hyphen = chr(45); // "-"
    $uuid = chr(123) // "{"
     . substr($charid, 0, 8) . $hyphen
    . substr($charid, 8, 4) . $hyphen
    . substr($charid, 12, 4) . $hyphen
    . substr($charid, 16, 4) . $hyphen
    . substr($charid, 20, 12)
    . chr(125); // "}"
    return $uuid;
  }
}

function printPostList()
{
  echo ('<div class="flash">' . "\n");
  echo ('  <dl>' . "\n");
  echo ('      <dt>Method</dt>' . "\n");
  echo ('      <dd>');
  echo ($_SERVER['REQUEST_METHOD']);
  echo ('</dd>' . "\n");
  foreach ($_POST as $key => $value) {
    echo ('      <dt>');
    echo ($key);
    echo ('</dt>' . "\n");
    echo ('      <dd>');
    echo ($value);
    echo ('</dd>' . "\n");
  }
  echo ('  </dl>' . "\n");
  echo ('</div>' . "\n");
}

function printArray($array)
{
  echo ('<div class="flash">' . "\n");
  if(count($array) === 0)
  {
    echo 'None';
  }
  else
  {
    echo ('  <dl>' . "\n");
    foreach ($array as $key => $value) {
      echo ('      <dt>');
      echo ($key);
      echo ('</dt>' . "\n");
      echo ('      <dd>');
      echo ($value);
      echo ('</dd>' . "\n");
    }
    echo ('  </dl>' . "\n");
  }
  echo ('</div>' . "\n");
}

function redirect($url, $statusCode = 302)
{
  header('Location: ' . $url, true, $statusCode);

  echo ('<!DOCTYPE html>' . "\n");
  echo ('<html lang="en">' . "\n");
  echo ('  <head>' . "\n");
  echo ('    <title>' . getHttpDescriptionWithCode($statusCode) . '</title>' . "\n");
  echo ('  </head>' . "\n");
  echo ('  <body>' . "\n");
  echo ('    <h1>' . getHttpDescription($statusCode) . '</h1>' . "\n");
  echo ('    <p>The requested content has been moved <a href="' . $url . '">here</a>.</p>' . "\n");
  echo ('  </body>' . "\n");
  echo ('</html>' . "\n");

  exit();
}

function getRealHost()
{
  // https://stackoverflow.com/a/37347743/148962
  return strstr($_SERVER['HTTP_HOST'], ':', true);
}
