<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Meta');

  renderHtmlTemplateStart(); 
 
?>

  <p>Meta elements are tags used in HTML and XHTML documents to provide structured metadata about a Web page. They are part of a web page's head section. Multiple Meta elements with different attributes can be used on the same page. Meta elements can be used to specify page description, keywords and any other metadata not provided through the other <code>head</code> elements and attributes.</p>

  <p>The meta element has two uses: either to emulate the use of an HTTP response header field, or to embed additional metadata within the HTML document. It is often the former usage that has particular interest to a web crawler.</p>

  <h3>Tests</h3>

<?php 

    echo createTestLink('Content Type', 'meta-contenttype.html');

?>

<?php renderHtmlTemplateEnd(); ?>
