<?php

  $html = '<html>
    <head>
        <title>502 Bad Gateway</title>
    </head>
    <body>
        <h1>Bad Gateway</h1>
        <p></p>
    </body>
</html>';

  header('HTTP/1.1 502 Bad Gateway');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));

  echo $html;
?>
