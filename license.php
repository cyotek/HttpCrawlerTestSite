<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 
  require 'vendor/autoload.php';
  use Michelf\Markdown;

  define('PAGE_TITLE', 'License');

  renderTemplateStart(); 

  $licenseMarkdown = file_get_contents(CURDIR .'LICENSE.md');
  $licenseHtml = Markdown::defaultTransform($licenseMarkdown);
?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>

    <?php echo $licenseHtml ?>

  </div>

<?php renderTemplateEnd(); ?>
