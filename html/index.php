<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HTML Tags and Attributes');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>This page indexes HTML tags and attributes which have relevance to the crawling of a website.</p>
    
    <div class="columns">

    <div class="one-third column">
      <h3>Elements</h3>
      <?php createHtmlElementsNavBar(false); ?>
    </div>

    <div class="one-third column">
      <h3>Attributes</h3>
      <?php createHtmlAttributesNavBar(false); ?>
    </div>

    <div class="one-third column">
    </div>

  </div>
</div>

<?php renderTemplateEnd(); ?>
