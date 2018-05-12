<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HTTP Methods');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>HTTP defines methods (sometimes referred to as verbs) to indicate the desired action to be performed on the identified resource. What this resource represents, whether pre-existing data or data that is generated dynamically, depends on the implementation of the server.</p>
    
    <div class="columns">

      <div class="one-third column">
        <?php createHttpMethodsNavBar(); ?>
      </div>

      <div class="one-third column">
      </div>

      <div class="one-third column">
      </div>

    </div>

  </div>

<?php renderTemplateEnd(); ?>
