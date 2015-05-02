<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'HTTP Status Codes');

  renderTemplateStart(); 
 
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <p>This page indexes  HTTP status codes that generally have a special meaning during a crawl, such as redirecting to another resource, prompting for credentials, or handling some form of failure.</p>
    
    <div class="flash flash-warn">
      As the 4xx and 5xx series of codes deal with errors, the hyper-links to these pages are using <code>onclick</code> events instead of a standard <code>href</code> to prevent them from being detected by current versions of WebCopy (which do not process JavaScript). This allows an "out of the box" crawl to complete without displaying errors or password prompts etc. and without requiring any changes to the default crawl configuration. WebCopy integration tests access the relevant URI directly in order to test the feature. Future versions of WebCopy are expected to include limited JavaScript processing.
    </div>

  </div>

  <div class="container">
    
    <div class="columns">

      <div class="one-third column">
        <h3>3xx Redirection</h3>
        <?php createHttp3xxNavBar(false); ?>
      </div>

      <div class="one-third column">
        <h3>4xx Client Error</h3>
        <?php createHttp4xxNavBar(false); ?>
      </div>

      <div class="one-third column">
        <h3>5xx Server Error</h3>
        <?php createHttp5xxNavBar(false); ?>
      </div>

    </div>
</div>

<?php renderTemplateEnd(); ?>
