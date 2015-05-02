<?php

  $html = '<html>
    <head>
        <title>504 Gateway Timeout</title>
    </head>
    <body>
        <h1>Gateway Timeout</h1>
        <p></p>
    </body>
</html>';

  header('HTTP/1.1 504 Gateway Timeout');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));

  echo $html;
?>
