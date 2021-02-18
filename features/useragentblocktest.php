<?php

  if (strpos($_SERVER['HTTP_USER_AGENT'], 'BAD-AGENT') !== false) 
  {
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

    die();
  }
?>

<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'User Agent');

  renderFeaturesTemplateStart(); 
 
?>

<p>Some websites use user agent sniffing and return a <code>403</code>
  (Forbidden) status code a given agent. This demonstration page will
  return a 403 if the user agent includes the text <code>BAD-AGENT</code>.
</p>

<p>The user agent used to request this page was:</p>

<p>
  <pre><code><?php echo $_SERVER['HTTP_USER_AGENT'] ?></code></pre>
</p>

<?php renderFeaturesTemplateEnd(); ?>
