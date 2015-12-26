<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Change Log');

  renderTemplateStart(); 

  require_once LIBDIR . 'markdown/Markdown.inc.php'; 

  use \Michelf\Markdown;

  $markdown = file_get_contents(CURDIR .'CHANGELOG.md');
  $html = Markdown::defaultTransform($markdown);

?>

  <div class="container">

<?php echo $html ?>

  </div>

<?php renderTemplateEnd(); ?>
