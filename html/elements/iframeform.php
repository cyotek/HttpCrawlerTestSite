<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Form Test');

  renderCoreTemplateStart(); 
 
?>

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
    echo('<input type="hidden" name="code" value=' . getGUID() . ' />')
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

<?php renderCoreTemplateEnd(); ?>
