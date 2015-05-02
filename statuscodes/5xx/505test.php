<?php

  $html = '<html>
    <head>
        <title>505 HTTP Version Not Supported</title>
    </head>
    <body>
        <h1>HTTP Version Not Supported</h1>
        <p></p>
    </body>
</html>';

  header('HTTP/1.1 505 HTTP Version Not Supported');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));

  echo $html;
?>
