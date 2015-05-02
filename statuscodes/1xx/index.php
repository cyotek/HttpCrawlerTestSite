<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HTTP Status Codes');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>Request received, continuing process.</p>

    <p>This class of status code indicates a provisional response, consisting only of the Status-Line and optional headers, and is terminated by an empty line. Since HTTP/1.0 did not define any 1xx status codes, servers <em>must not</em> send a 1xx response to an HTTP/1.0 client except under experimental conditions.</p>

    <div class="flash">
      There are currently no 1xx specific tests available.
    </div>

  </div>

<?php renderTemplateEnd(); ?>
