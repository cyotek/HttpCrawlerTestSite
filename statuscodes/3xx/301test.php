<?php require_once __DIR__ . '/prepend.php'; ?>
<?php
header('HTTP/1.1 301 Moved Permanently');
header('Location: ' . getFullyQualifiedUrl(getHttpStatusCodeRelativeUrl(301) . '301final.php'));
?>