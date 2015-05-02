<?php

  $html = '<html>
    <head>
        <title>503 Service Unavailable</title>
    </head>
    <body>
        <h1>Service Unavailable</h1>
        <p></p>
    </body>
</html>';

  header('HTTP/1.1 503 Service Unavailable');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));

  echo $html;
?>
