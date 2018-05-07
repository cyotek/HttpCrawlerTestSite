<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Custom Action Form Test');

  renderHtmlTemplateStart(); 
 
?>

 <p>This demonstration features a form which posts submitted data to a different page.</p>

<form method="post" action="formactiontestfinal.php">
  <?php echo('<input type="hidden" name="code" value="' . getGUID() . '" />') ?>
  <dl class="form-group">
    <dt><label for="question1">Question 1</label></dt>
    <dd><input class="form-control" type="text" id="question1" name="question1"></dd>

    <dt><label for="question2">Question 2</label></dt>
    <dd><input class="form-control" type="text" id="question2" name="question2"></dd>
  </dl>

  <div class="form-actions">
    <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
    <button type="reset" class="btn">Cancel</button>
  </div>

</form>

<?php renderHtmlTemplateEnd(); ?>