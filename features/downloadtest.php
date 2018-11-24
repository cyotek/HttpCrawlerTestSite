<?php

parse_str($_SERVER['QUERY_STRING'], $params);

$contentType = $params["type"];
$fileName = $params["filename"];
$size = (int)$params["size"];
$max = 1024 * 1024 * 10;

if($size > $max)
{
  $size = $max;
}

header('HTTP/1.1 200 OK');
header('Content-Type: ' . $contentType);
header('Content-Length: ' . $size);
header('Content-Disposition: attachment; filename="' . $fileName . '"');

for($i = 1; $i < $size; $i++) 
{
  echo '.';
}
echo '#';

?>
