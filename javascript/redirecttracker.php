<?php require_once __DIR__ . '/prepend.php'; ?>
<?php
header('HTTP/1.1 302 Found');
header('Location: ' . getFullyQualifiedUrl(getJavaScriptRelativeUrl() . 'uritransformfinal.php'));
?>