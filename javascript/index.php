<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'JavaScript');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>JavaScript, often abbreviated as "JS", is a high-level, dynamic, untyped, and interpreted run-time language. Alongside HTML and CSS, JavaScript is one of the three core technologies of World Wide Web content production; the majority of websites employ it, and all modern Web browsers support it without the need for plug-ins. However, not all web crawlers support JavaScripts which can make crawling or copying such sites impossible for a given crawler.</p>
    
    <div class="columns">

    <div class="one-third column">
      <?php createJavaScriptFeaturesNavBar(false); ?>
    </div>

    <div class="one-third column">
    </div>

    <div class="one-third column">
    </div>

  </div>
</div>

<?php renderTemplateEnd(); ?>
