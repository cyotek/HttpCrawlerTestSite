<?php require_once __DIR__ . '/prepend.php'; ?>
<?php
header('HTTP/1.1 307 Temporary Redirect');
header('Location: ' . getFullyQualifiedUrl(getHttpStatusCodeRelativeUrl(307) . '307final.php'));
?>