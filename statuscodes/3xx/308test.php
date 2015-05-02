<?php require_once __DIR__ . '/prepend.php'; ?>
<?php
header('HTTP/1.1 308 Permanent Redirect');
header('Location: ' . getFullyQualifiedUrl(getHttpStatusCodeRelativeUrl(308) . '308final.php'));
?>