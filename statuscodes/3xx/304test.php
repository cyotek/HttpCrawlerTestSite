<?php require_once __DIR__ . '/prepend.php'; ?>

<?php
header('HTTP/1.1 304 Not Modified');
header('Date: ' . date('D, d M Y H:i:s T'));
?>