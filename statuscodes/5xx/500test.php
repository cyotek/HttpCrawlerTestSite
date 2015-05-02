<?php

  $html = '<html>
    <head>
        <title>500 Internal Server Error</title>
    </head>
    <body>
        <h1>Internal Server Error</h1>
        <p>An internal server error occurred, your request may not have completed correctly.</p>
    </body>
</html>';

  header('HTTP/1.1 500 Internal Server Error');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));

  echo $html;
?>
