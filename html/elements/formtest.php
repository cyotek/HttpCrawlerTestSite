<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Form Test');

  renderHtmlTemplateStart(); 
 
?>

 <p>A <strong>webform</strong>, <strong>web form</strong> or <strong>HTML form</strong> on a web page allows a user to enter data that is sent to a server for processing. Forms can resemble paper or database forms because web users fill out the forms using checkboxes, radio buttons, or text fields. For example, forms can be used to enter shipping or credit card data to order a product, or can be used to retrieve search results from a search engine.</p>

<?php

if (isset($_POST['submit'])) {

?>
    <div class="flash">
      <dl>
        <dt>Method</dt>
        <dd><?php echo($_SERVER['REQUEST_METHOD'])?></dd>
        <dt>First name</dt>
        <dd><?php echo(htmlentities($_POST['firstname']))?></dd>
        <dt>Last name</dt>
        <dd><?php echo(htmlentities($_POST['lastname']))?></dd>
        <dt>Code</dt>
        <dd><?php echo($_POST['code'])?></dd>
      </dl>
    </div>
<?php
  }
?>
      
    <form method="post">
<?php
    echo('<input type="hidden" name="code" value="' . getGUID() . ' />"')
?>
      <dl class="form-group">
        <dt><label for="firstname">First name</label></dt>
        <dd><input class="form-control" type="text" id="firstname" name="firstname"></dd>

        <dt><label for="lastname">Last name</label></dt>
        <dd><input class="form-control" type="text" id="lastname" name="lastname"></dd>
      </dl>

      <div class="form-actions">
        <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
        <button type="reset" class="btn">Cancel</button>
      </div>

    </form>  

<?php renderHtmlTemplateEnd(); ?>
