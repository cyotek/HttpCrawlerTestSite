<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'License');

  renderTemplateStart(); 

  require_once LIBDIR . 'markdown/Markdown.inc.php'; 

  use \Michelf\Markdown;

  $licenseMarkdown = file_get_contents(CURDIR .'LICENSE.md');
  $licenseHtml = Markdown::defaultTransform($licenseMarkdown);

?>

  <div class="container">

    <h1><?php echo PAGE_TITLE ?></h1>


<?php echo $licenseHtml ?>

  </div>

<?php renderTemplateEnd(); ?>
