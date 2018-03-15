<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 
  require 'vendor/autoload.php';
  use Michelf\Markdown;

  define('PAGE_TITLE', 'Change Log');

  renderTemplateStart(); 

  $markdown = file_get_contents(CURDIR .'CHANGELOG.md');
  $html = Markdown::defaultTransform($markdown);
?>

  <div class="container">

  <?php echo $html ?>

  </div>

<?php renderTemplateEnd(); ?>
