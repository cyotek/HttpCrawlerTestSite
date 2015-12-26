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

  <p>The <code>style</code>  tag is used to define style information for an HTML document.</p>

  <p>In this example, a <code>style</code> element is being used to define a pair of background images, one directly from the <code>style</code> element, and the other from a stylesheet imported used the <code>@import</code> keyword.</p>
  
  <div class="city5"></div>

  <div class="city6"></div>

<?php renderHtmlTemplateEnd(); ?>
