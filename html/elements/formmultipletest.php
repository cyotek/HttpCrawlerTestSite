<?php require_once __DIR__ . '/prepend.php';?>

<?php

define('PAGE_TITLE', 'Multiple Forms Test');

renderHtmlTemplateStart();

?>

  <p>This demonstration contains multiple forms that can be submitted individually.</p>

  <?php if (isset($_POST['submit'])) {
  printPostList();
} ?>

  <form method="post" oninput="result.value=parseInt(a.value)+parseInt(b.value)">
    <input type="hidden" name="code" value='<?php echo (getGUID()) ?>' />
    <dl class="form-group">

      <dt>
                      <label for="avatar">Avatar<label> </dt>
      <dd>
        <input type="image" id="avatar" src="../../assets/img/city1.png" width="40" height="40" style="border-radius: 20px" />
      </dd>

      <dt>
                      <label for="title">Title</label>
                    </dt>
      <dd>
        <select class="form-control" id="title" name="title">
                              <option value="mr">Mr</option>
                              <option value="mrs">Mrs</option>
                              <option value="miss">Miss</option>
                            </select>
      </dd>

      <dt>
                      <label for="firstname">First name</label>
                    </dt>
      <dd>
        <input class="form-control" type="text" id="firstname" name="firstname">
      </dd>

      <dt>
                      <label for="lastname">Last name</label>
                    </dt>
      <dd>
        <input class="form-control" type="text" id="lastname" name="lastname">
      </dd>

      <dt>
                      <label for="comments">Comments</label>
                    </dt>
      <dd>
        <textarea class="form-control" id="comments" name="comments"></textarea>
      </dd>

      <dt>
                      <label for="comments">Challenge</label>
                    </dt>
      <dd>
        <input type="range" name="b" value="50" /> +
        <input type="number" name="a" value="10" /> =
        <output id="result" name="result">60</output>
      </dd>
    </dl>

    <div class="form-actions">
      <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
      <button type="reset" class="btn">Cancel</button>
    </div>

  </form>

  <form method="post" action="formactiontestfinal.php">
    <?php echo('<input type="hidden" name="code1" value="' . getGUID() . '" />') ?>
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

  <form method="post" action="">
    <?php echo('<input type="hidden" name="code2" value="' . getGUID() . '" />') ?>
    <dl class="form-group">
      <dt><label for="question3">Question 3</label></dt>
      <dd><input class="form-control" type="text" id="question3" name="question3"></dd>

      <dt><label for="question4">Question 4</label></dt>
      <dd><input class="form-control" type="text" id="question4" name="question4"></dd>
    </dl>

    <div class="form-actions">
      <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
      <button type="reset" class="btn">Cancel</button>
    </div>

  </form>

  <?php renderHtmlTemplateEnd();?>