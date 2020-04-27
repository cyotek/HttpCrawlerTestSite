<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Attribute Transformation');

  renderJavaScriptTemplateStart(); 
 
?>

<p>Even though a crawler such as WebCopy may not support JavaScript, it may
  be possible to pre-process attributes
  containing JavaScript and transform them.</p>

<p>The example buttons below use a JavaScript function to navigate to a
  different page by calling function
  <code>openPage</code> with two arguments. These arguments are then
  concatenated to create a destination URL which the
  browser is then instructed to navigate to. You can configure WebCopy can
  detect these patterns and generate the
  concatenated value, allowing it to crawl these pages, including correctly
  remapping the original source links to jump
  directly to the destination page.</p>

<p>Another example is a "middleman redirect", where clicking the button will
  first visit an interim page. WebCopy can
  transform this to remove the interim visit.</p>

<h3>Tests</h3>

<p>
  <a class="btn" href="javascript:openPage('1', 'index')">Category 1
    Index</a>
  <a class="btn" href="javascript:openPage('1', 'second')">Category 1 Page
    2</a>
  <a class="btn" href="javascript:openPage('2', 'index')">Category 2
    Index</a>
  <a class="btn"
    href="redirecttracker.php?url=uritransformfinal.php">Middleman
    Redirect</a>
</p>

<h3>Learn More</h3>

<ul>
  <li><a
      href="<?php echo getWebCopyUserManualUrl('uritransforms') ?>">WebCopy
      URI Transforms</a></li>
  <li><a
      href="https://www.cyotek.com/blog/products/transforming-hyperlinks-when-copying-websites">Announcement
      post
      with WebCopy examples</a></li>
</ul>

<script type="text/ecmascript">
  function openPage(category, name) {
    var url;

    url = category + "-" + name + ".php";

    window.location = url;
  }

</script>

<?php renderJavaScriptTemplateEnd(); ?>
