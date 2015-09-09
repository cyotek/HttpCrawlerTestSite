<?php
  
define('SITE_TITLE', 'HTTP Crawler Test Site');

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
    return 'http://help.cyotek.com/cyowcopy/webframe.html#' . $helpTopic . '.html';
}

function addStatusCodeInformationTable($statusCode, $tests = null, $helpTopic = null)
{
    $wikiUrl = 'http://en.wikipedia.org/wiki/List_of_HTTP_status_codes#' . $statusCode;
    $rfcUrl = '';
    $description = getLongHttpDescription($statusCode);
    
    if ($tests == null) {
        $tests = array('Test' => $statusCode . 'test.php');
    }

    echo '<p>' . $description . '</p>';

    renderH3('Tests');
    foreach ($tests as $key => $value) {
        echo createTestLink($key, $value);
    }
    unset($value);
    unset($key);


    renderH3('Learn More');
    echo '<ul>';
    echo '<li><a href="' . $wikiUrl . '">Wikipedia</a></li>' . "\n";
    if ($helpTopic <> null) {
        echo '<li><a href="' . getWebCopyUserManualUrl($helpTopic) . '">Related WebCopy Documentation</a></li>' . "\n";
    }
    echo '</ul>';
}

function createTestLink($title, $ref)
{
    return '<a href="' . $ref . '" class="btn btn-primary" title="' . $ref . '">' . $title . '</a>' . "\n";
}

function getHttpDescriptionWithCode($statusCode)
{
    return $statusCode . ' ' . getHttpDescription($statusCode);
}

function getHttpDescription($statusCode)
{
    switch($statusCode) {
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
    switch($statusCode) {
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

    echo '<nav class="menu docs-menu">';

    if ($header <> null) {
        echo '<span class="menu-heading">' . $header . '</span>' . "\n";
    }

    foreach ($codes as $value) {
        createNavigationLink(getHttpDescriptionWithCode($value), getHttpStatusCodeRelativeUrl($value) . $value . '.php', $useOnClickEvent);
    }
    unset($value);

    echo '</nav>';
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

    createHttpNavBar($header, array(400, 401, 403, 404, 405 /**, 406, 407, 408, 409, 410, 429 **/), true);
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

function createFeaturesNavBar()
{
    echo '<nav class="menu docs-menu">';

    createNavigationLink('CDN / Alternative Hosts', getFeatureRelativeUrl() . 'cdn.php');
    createNavigationLink('Default Document',        getFeatureRelativeUrl() . 'defaultdocuments.php');
    createNavigationLink('Meta Refresh',            getFeatureRelativeUrl() . 'metarefresh.php');
    createNavigationLink('Query Strings',           getFeatureRelativeUrl() . 'querystrings.php');
    createNavigationLink('Redirect Chain',          getFeatureRelativeUrl() . 'redirectchain.php', true);
    createNavigationLink('Redirect Loop',           getFeatureRelativeUrl() . 'redirectloop.php');
    createNavigationLink('Special Characters',      getFeatureRelativeUrl() . 'specialcharacters.php');
    createNavigationLink('Style Sheets',            getFeatureRelativeUrl() . 'stylesheets.php');
    createNavigationLink('URL Normalization',      getFeatureRelativeUrl() . 'normalize.php');
    createNavigationLink('User Agent',              getFeatureRelativeUrl() . 'useragent.php');

    echo '</nav>';
}

function getHtmlRelativeUrl()
{
    return '/html/';
}

function createHtmlNavBar()
{
    createHtmlElementsNavBar(true);
    createHtmlAttributesNavBar(true);
}

function createHtmlElementsNavBar($includeHeader = false)
{
    echo '<nav class="menu docs-menu">';

    if ($includeHeader) {
        echo '<span class="menu-heading">Elements</span>' . "\n";
    }

    createNavigationLink('Anchor',        getHtmlRelativeUrl() . 'elements/a.php');
    createNavigationLink('Base',          getHtmlRelativeUrl() . 'elements/base.php');
    createNavigationLink('Image',         getHtmlRelativeUrl() . 'elements/img.php');
    createNavigationLink('Inline Frame',  getHtmlRelativeUrl() . 'elements/iframe.php');
    createNavigationLink('Link',          getHtmlRelativeUrl() . 'elements/link.php');
    createNavigationLink('Object',        getHtmlRelativeUrl() . 'elements/object.php');

    echo '</nav>';
}

function createHtmlAttributesNavBar($includeHeader = false)
{
    echo '<nav class="menu docs-menu">';

    if ($includeHeader) {
        echo '<span class="menu-heading">Attributes</span>' . "\n";
    }

    createNavigationLink('Custom', getHtmlRelativeUrl() . 'attributes/custom.php');
    createNavigationLink('SrcSet', getHtmlRelativeUrl() . 'attributes/srcset.php');
    createNavigationLink('Style' , getHtmlRelativeUrl() . 'attributes/style.php');

    echo '</nav>';
}

function getBaseUrl()
{
    return 'http://' . $_SERVER['HTTP_HOST'];
}

function getFullyQualifiedUrl($relativeUri)
{
    return getBaseUrl() . $relativeUri;
}
?>
