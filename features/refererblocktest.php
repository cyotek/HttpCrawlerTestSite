<?php

  if (strpos($_SERVER['HTTP_REFERER'], 'WebCopy') !== false) 
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

  define('PAGE_TITLE', 'Referer Header');

  renderFeaturesTemplateStart(); 
 
?>

<p>This demonstration page will
  return a 403 if the referrer includes the text <code>WebCopy</code>.
</p>

<p>The header used to request this page was:</p>

<p>
  <pre><code><?php echo $_SERVER['HTTP_REFERER'] ?></code></pre>
</p>

<?php renderFeaturesTemplateEnd(); ?>
