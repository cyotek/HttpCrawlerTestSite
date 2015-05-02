<?php require_once __DIR__ . '/prepend.php'; ?>

<?php
header('HTTP/1.1 303 See Other');
header('Location: ' . getFullyQualifiedUrl(getHtmlRelativeUrl() . 'index.php'));
?>