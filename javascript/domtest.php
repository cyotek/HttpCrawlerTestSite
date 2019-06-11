<?php require_once __DIR__ . '/prepend.php'; ?>

<?php

parse_str($_SERVER['QUERY_STRING'], $params);

define('PAGE_TITLE', 'Dom Test ' + (int)$params['number']);

renderFeaturesTemplateStart();

?>

<p>This page serves no purpose other than for testing dynamic elements.</p>

<?php renderFeaturesTemplateEnd(); ?>