<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Features');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>This page indexes HTTP features which have relevance to the crawling of a website.</p>
    
    <div class="columns">

      <div class="one-third column">
        <?php createFeaturesNavBar(); ?>
      </div>

      <div class="one-third column">
      </div>

      <div class="one-third column">
      </div>

    </div>

  </div>

<?php renderTemplateEnd(); ?>
