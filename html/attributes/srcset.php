<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'SrcSet Attribute');

  renderHtmlTemplateStart(); 
 
?>

<p>
    Below is a <code>img</code> element with both a regular <code>src</code> attribute as well as a <code>srcset</code> attribute. Inline CSS sets the dimensions of the image to 400x400px. On browsers without <code>srcset</code> support, the value of the <code>src</code> attribute will be used as the image source. On regular resolution displays, the 1x variant of the <code>srcset</code> will be used. On displays with 2 device pixels per CSS pixel, the 2x variant of the <code>srcset</code> will be used. Similarly, there is a 3x image, and a 4x image.
</p>

<img style="width: 400px; height: 400px;" src="../../../assets/img/image-src.png" srcset="../../../assets/img/image-1x.png 1x, ../../../assets/img/image-2x.png 2x, ../../../assets/img/image-3x.png 3x, ../../../assets/img/image-4x.png 4x" alt="Example of the srcset attribute. Image contains a coloured striped pattern with some inline text that indicates which of the candidate images were selected." />

<p>
    The HTML for the above image is (paths omitted for clarity): 
</p>

<pre>
&lt;img style="width: 400px; height: 400px;" 
     src="image-src.png" 
     srcset="image-1x.png 1x, image-2x.png 2x, image-3x.png 3x, image-4x.png 4x"
/&gt;
</pre>

<?php renderHtmlTemplateEnd(); ?>
