<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 
  require 'vendor/autoload.php';
  use Michelf\Markdown;

  define('PAGE_TITLE', 'About');

  renderTemplateStart(); 

  $aboutMarkdown = file_get_contents(CURDIR .'README.md');
  $aboutHtml = Markdown::defaultTransform($aboutMarkdown);
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <?php echo $aboutHtml ?>

    <h2>Source Code</h2>

    <p>The source code for this site is available from <a href="https://github.com/cyotek/HttpCrawlerTestSite">Cyotek's GitHub page</a>.</p>

    <h2>License</h2>

    <p>This site and its source code is licensed via the MIT License. <a href="/license.php">View License</a>.</p>

  </div>

<?php renderTemplateEnd(); ?>
