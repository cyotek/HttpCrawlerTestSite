<?php
$realm = 'WebCopyDemo';

function Http_Digest_parse($txt)
{
    // protect against missing data
    $needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $data = array();
    $keys = implode('|', array_keys($needed_parts));

    preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);

    foreach ($matches as $m) {
        $data[$m[1]] = $m[3] ? $m[3] : $m[4];
        unset($needed_parts[$m[1]]);
    }

    return $needed_parts ? false : $data;
}  

if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('WWW-Authenticate: Digest realm="' . $realm . '",qop="auth",nonce="' . uniqid() . '",opaque="' . md5($realm) . '"');
    header('HTTP/1.0 401 Unauthorized');
    die('Sorry, you are not authorized to view this resource.');
} 
?>

<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', '401 Unauthorized (Digest)');

  renderStatusCodesTemplateStart(); 
 
  $data = Http_Digest_parse($_SERVER['PHP_AUTH_DIGEST']);
?>
  <h1><?php echo PAGE_TITLE ?></h1>

  <p>This page tests that WebCopy can handle 401 challenge authentication using the digest access authentication scheme.</p>

<dl>
  <dt>User name</dt>
  <dd><?php echo $data['username'] ?></dd>
</dl>


<?php renderStatusCodesTemplateEnd(); ?>
