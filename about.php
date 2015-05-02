<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'About');

  renderTemplateStart(); 

  require_once LIBDIR . 'markdown\Markdown.inc.php'; 

  use \Michelf\Markdown;

  $aboutMarkdown = file_get_contents(CURDIR .'readme.md');
  $aboutHtml = Markdown::defaultTransform($aboutMarkdown);

?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>


<?php echo $aboutHtml ?>

  </div>

<?php renderTemplateEnd(); ?>
