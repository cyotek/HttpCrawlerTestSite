<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HTTP Status Codes');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>This class of status code indicates the client must take additional action to complete the request. Many of these status codes are used in URL redirection.</p>

    <p>A user agent may carry out the additional action with no user interaction only if the method used in the second request is <code>GET</code> or <code>HEAD</code>. A user agent should not automatically redirect a request more than five times, since such redirections usually indicate an infinite loop.</p>

    <?php createHttp3xxNavBar(); ?>

  </div>

<?php renderTemplateEnd(); ?>
