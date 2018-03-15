<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Custom Attributes');

  renderHtmlTemplateStart(); 
 
?>

  <p data-original="/assets/img/background4.png">Although the most commonly used attributes for linking to other resources are <code>href</code> and <code>src</code>, JavaScript can and does make use of any other number of custom attributes based on the requirements of the script author. The example <code>&lt;img&gt;</code> element below includes a standard <code>src</code> attribute, but also includes a custom <code>data-original</code> attribute with an alternative image. This paragraph also includes a custom <code>data-original</code> attribute.</p>

  <p><img data-original="/assets/img/background5.png" src="/assets/img/background1.png" alt="Background" style="width:  100%;" /></p>

  <p>If your crawler supports XPath, you could use the expression <code>//img/@data-original</code> to match the attribute in the above image. The expression <code>//p/@data-original</code> to match the attribute in the paragraph. Or you could use the expression <code>//*/@data-original</code> to match the attribute on both elements, and any other element.</p>

  <p><input type="text" disabled="disabled" value="/assets/img/background6.png"></p>

  <p>An example expression for the above <code>input</code> element could be <code>//input[@type='text'][@disabled][@value]</code>.</p>
  
  <h3>Learn More</h3>

  <ul>
    <li><a href="<?php echo getWebCopyUserManualUrl('customattributes') ?>">WebCopy Custom Attribute Settings</a></li>
  </ul>

<?php renderHtmlTemplateEnd(); ?>
