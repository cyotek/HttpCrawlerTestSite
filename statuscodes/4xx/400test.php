<?php

  $html = '<html><body><h2>No Host: header received</h2>HTTP 1.1 requests must include the Host: header.</body></html>';

  header('HTTP/1.1 400 Bad Request');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));

  echo $html;
?>
