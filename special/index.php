<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Special Pages');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>This page contains links to demonstrations that are for specific cases that don't fit a tutorial crawl.</p>
    
    <div class="columns">

      <div class="one-third column">
        <nav class="menu docs-menu">
          <a class="menu-item" href="transform.php">URI Transformation</a>
        </nav>
      </div>

      <div class="one-third column">
      </div>

      <div class="one-third column">
      </div>

    </div>

  </div>

<?php renderTemplateEnd(); ?>
