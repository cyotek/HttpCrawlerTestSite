<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'POST Method');

  renderHttpMethodsTemplateStart(); 
 
?>

    <p>The <code>POST</code> requests that the server accept the entity enclosed in the request as a new subordinate of the web resource identified by the URI. The data POSTed might be, for example, an annotation for existing resources; a message for a bulletin board, newsgroup, mailing list, or comment thread; a block of data that is the result of submitting a web form to a data-handling process; or an item to add to a database.</p>

<?php

if (isset($_POST['submit'])) {

    echo('Method: <strong>'     . $_SERVER['REQUEST_METHOD']        . '</strong><br />' . "\n");
    echo('First name: <strong>' . htmlentities($_POST['firstname']) . '</strong><br />' . "\n");
    echo('Last name: <strong>'  . htmlentities($_POST['lastname'])  . '</strong><br />' . "\n");
    echo('Code: <strong>'       . $_POST['code']                    . '</strong><br />' . "\n");
}
?>
      
    <form method="post">
<?php
    echo('<input type="hidden" name="code" value=' . getGUID() . ' />')
?>
      <p><label for="firstname">First name:</label> <input type="text" id="firstname" name="firstname" /></p>
      <p><label for="lastname">Last name:</label> <input type="text" id="lastname" name="lastname" /></p>
      <p><input type="submit" name="submit" value="Submit" /></p>   
    </form>  

  <h3>Learn More</h3>

<ul>
  <li><a href="<?php echo getWebCopyUserManualUrl('forms') ?>">WebCopy Form Settings</a></li>
</ul>

<?php renderHttpMethodsTemplateEnd(); ?>
