<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HTTP Status Codes');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>The 4xx class of status code is intended for cases in which the client seems to have erred. Except when responding to a <code>HEAD</code> request, the server <em>should</em> include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition. These status codes are applicable to any request method. User agents <em>should</em> display any included entity to the user.</p>

    <?php createHttp4xxNavBar(); ?>

  </div>

<?php renderTemplateEnd(); ?>
