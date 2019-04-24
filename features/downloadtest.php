<?php

ignore_user_abort();
ob_start();

parse_str($_SERVER['QUERY_STRING'], $params);

$contentType = $params["type"];
$fileName = $params["filename"];
$size = (int)$params["size"];
$max = 1024 * 1024 * 1;

header('HTTP/1.1 200 OK');
header('Connection: close');
header('Content-Type: ' . $contentType);
header('Content-Length: ' . $size);
header('Content-Disposition: attachment; filename="' . $fileName . '"');

for($i = 1; $i < $size; $i++) 
{
  echo '.';

  if($i > $max)
  {
    break;
  }
}
echo '#';

ob_end_flush();
ob_flush();
flush();

?>