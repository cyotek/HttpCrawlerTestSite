<?php

  $html = '<html>
    <head>
        <title>405 Method Not Allowed</title>
    </head>
    <body>
        <h1>Method Not Allowed</h1>
        <p>The requested method GET is not allowed for the URL ' . $_SERVER['PHP_SELF'] . '.</p>
    </body>
</html>';

  header('HTTP/1.1 405 Method Not Allowed');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));
  header('Allow: GET,HEAD,POST,OPTIONS');

  echo $html;
?>
