<?php require_once __DIR__ . '/prepend.php'; ?>
<?php
parse_str($_SERVER['QUERY_STRING'], $params);  

header('HTTP/1.1 303 See Other');
header('Location: ' . getFullyQualifiedUrl(getFeatureRelativeUrl() . 'redirectchaintest.php?index=' . ($params['index'] + 1)));
?>