<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Style');

  renderHtmlTemplateStart(
      '<style type="text/css">
  @import url("../../assets/css/city6.css");

  .city5
  {
    width: 160px;
    height: 160px;
    background-image: url("../../assets/img/city5.png");
  }
  </style>'
  ); 
 
?>

  <p>The <code>&lt;style&gt;</code> element is used to define style information for an HTML document.</p>

  <p>In this example, a <code>&lt;style&gt;</code> element is being used to define a pair of background images, one directly from the <code>&lt;style&gt;</code> element, and the other from a stylesheet imported used the <code>@import</code> keyword.</p>
  
  <div class="city5"></div>

  <div class="city6"></div>

<?php renderHtmlTemplateEnd(); ?>
