<?php require_once __DIR__ . '/prepend.php';?>

<?php

define('PAGE_TITLE', 'Form Elements Test');

renderHtmlTemplateStart();

?>

    <p>A <strong>webform</strong>, <strong>web form</strong> or <strong>HTML form</strong> on a web page allows a user to enter data that is sent to a server for processing. Forms can resemble paper or database forms because web users fill out the forms
        using checkboxes, radio buttons, or text fields. For example, forms can be used to enter shipping or credit card data to order a product, or can be used to retrieve search results from a search engine.</p>

    <?php

if (isset($_POST['submit'])) {

  ?>
        <div class="flash">
            <dl>
                <dt>Method</dt>
                <dd>
                    <?php echo ($_SERVER['REQUEST_METHOD']) ?>
                </dd>
                <dt>Title</dt>
                <dd>
                    <?php echo (htmlentities($_POST['title'])) ?>
                </dd>
                <dt>First name</dt>
                <dd>
                    <?php echo (htmlentities($_POST['firstname'])) ?>
                </dd>
                <dt>Last name</dt>
                <dd>
                    <?php echo (htmlentities($_POST['lastname'])) ?>
                </dd>
                <dt>Comments</dt>
                <dd>
                    <?php echo (htmlentities($_POST['comments'])) ?>
                </dd>
                <dt>Code</dt>
                <dd>
                    <?php echo ($_POST['code']) ?>
                </dd>
            </dl>
        </div>
        <?php

  //echo var_dump($_POST);
}
?>

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

            <?php renderHtmlTemplateEnd();?>