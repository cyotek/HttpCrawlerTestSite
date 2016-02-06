<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Picture');

  renderHtmlTemplateStart(); 
 
?>

  <div class="flash flash-warn">
    Not all browsers current support the <code>&lt;picture&gt;</code> element, and the specification is subject to change.
  </div>

  <p>The <strong>HTML <code>&lt;picture&gt;</code> element</strong> is a container used to specify multiple <code>&lt;source&gt;</code> elements for a specific <code>&lt;img&gt;</code> contained in it. The browser will choose the most suitable source according to the current layout of the page (the constraints of the box the image will appear in) and the device it will be displayed on (e.g. a normal or hiDPI device.)</p>

  <h3>If your browser supports the &lt;picture&gt; element</h3>

  <p>In this demo, if the viewport is greater than 1000 pixels, an image with a width of 730 pixels will be displayed, otherwise an image with a width of 350 pixels will be shwon.</p>  

  <h3>If your browser does not support the &lt;picture&gt; element</h3>

  <p>If your browser does not support the element, it will simply ignore it and fall back to the <code>&lt;img&gt;</code> element. In this demo, that will shown an image with a width of 200 pixels.</p>

  <picture>
    <source media="(max-width:999px)" srcset="/assets/img/brcath-350.jpg"></source>
    <source media="(min-width:1000px)" srcset="/assets/img/brcath-730.jpg"></source>
		<img src="/assets/img/brcath-200.jpg" alt="St Paul's Cathedral"/>
  </picture>

<?php renderHtmlTemplateEnd(); ?>
