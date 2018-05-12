
<?php

  $method = $_SERVER['REQUEST_METHOD'];

  if($method == "HEAD")
  {
  $html = '<html>
    <head>
        <title>405 Method Not Allowed</title>
    </head>
    <body>
        <h1>Method Not Allowed</h1>
        <p>The requested method ' . $method . ' is not allowed for the URL ' . $_SERVER['PHP_SELF'] . '.</p>
    </body>
</html>';

  header('HTTP/1.1 405 Method Not Allowed');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));
  header('Allow: GET,POST,OPTIONS');

  echo $html;
  }
  else
  {
    require_once __DIR__ . '/prepend.php';
      define('PAGE_TITLE', 'HEAD Method Test');
    
      renderHttpMethodsTemplateStart(); 
     
    ?>
    
      <p>Accessing this page via the <code>HEAD</code> method will return 405 Method Not Allowed.</p>
    
    <?php renderHttpMethodsTemplateEnd(); ?>
    <?php
      }
?>
