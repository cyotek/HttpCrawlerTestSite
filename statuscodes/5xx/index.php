<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HTTP Status Codes');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>The server failed to fulfil an apparently valid request.</p>

    <p>Response status codes beginning with the digit <code>5</code> indicate cases in which the server is aware that it has encountered an error or is otherwise incapable of performing the request. Except when responding to a <code>HEAD</code> request, the server <em>should</em> include an entity containing an explanation of the error situation, and indicate whether it is a temporary or permanent condition. Likewise, user agents <em>should</em> display any included entity to the user. These response codes are applicable to any request method.</p>

    <?php createHttp5xxNavBar(); ?>

  </div>

<?php renderTemplateEnd(); ?>
