<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'URI Transformation');

  renderJavaScriptTemplateStart(); 
 
?>

  <p>Even though a crawler such as WebCopy may not support JavaScript, it may be possible to find pre-process URI's and transform them.</p>

  <p>The example buttons below each have call a JavaScript function to navigate to a different page. Each link calls a JavaScript function <code>openPage</code> with two arguments. These arguments are then concatenated to create a destination URL which the browser is then instructed to navigate to. WebCopy can detect these patterns and generate the concatenated value, allowing it to crawl these pages, including correctly remapping the original source links to jump directly to the destination page.</p>

  <h3>Tests</h3>

  <p>
    <a class="btn btn-primary" href="javascript:openPage('1', 'index')">Categtory 1 Index</a>
    <a class="btn btn-primary" href="javascript:openPage('1', 'second')">Categtory 1 Page 2</a>
    <a class="btn btn-primary" href="javascript:openPage('2', 'index')">Categtory 2 Index</a>
    <a class="btn btn-primary" href="redirecttracker.php?url=uritransformfinal.php">Middleman Redirect</a>
  </p>

  <h3>Learn More</h3>

  <ul>
    <li><a href="<?php echo getWebCopyUserManualUrl('urireplacements') ?>">WebCopy URI Replacement</a></li>
  </ul>

<script type="text/ecmascript">
  function openPage(category, name)
  {
    var url;

    url = category + "." + name + ".php";

    window.location = url;
  }
</script>

<?php renderJavaScriptTemplateEnd(); ?>
