<?php

  $html = '<html>
    <head>
        <title>403 Forbidden</title>
    </head>
    <body>
        <h1>Forbidden</h1>
        <p>You do not have permission to access this resource.</p>
    </body>
</html>';

  header('HTTP/1.1 403 Forbidden');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));

  echo $html;
?>
