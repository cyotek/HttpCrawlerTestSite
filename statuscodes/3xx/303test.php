<?php require_once __DIR__ . '/prepend.php'; ?>

<?php
header('HTTP/1.1 303 See Other');
header('Location: ' . getFullyQualifiedUrl(getHttpStatusCodeRelativeUrl(303) . '303final.php'));
?>