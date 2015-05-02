<?php

  $html = '<html>
    <head>
        <title>501 Method Not Implemented</title>
    </head>
    <body>
        <h1>Method Not Implemented</h1>
        <p>LINK to /index.html not supported.
            <br />
        </p>
    </body>
</html>';

  header('HTTP/1.1 501 Method Not Implemented');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));

  echo $html;
?>
