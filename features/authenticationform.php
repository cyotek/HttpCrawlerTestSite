<?php require_once __DIR__ . '/prepend.php';?>

<?php

$fakeToken = 'c9073867-2b97-49aa-81df-837d5ae02946';
$attempted = isset($_POST['submit']);
$invalidToken = 0;

if ($attempted == 1) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $token = $_POST['token'];
  $invalidToken = $token != $fakeToken;

  if ($username == 'guest' && $password == 'testing1' && $invalidToken == 0) {
    // authorised!
    $_SESSION['username'] = 'guest';
    $_SESSION['friendlyname'] = 'Guest';

    redirect(getFullyQualifiedUrl(getFeatureRelativeUrl() . 'authenticationloggedin.php'));
  }
}
?>

<?php

define('PAGE_TITLE', 'Log in');

renderFeaturesTemplateStart();

?>

<p>This form simulates form based authentication for web applications.</p>

<div class="flash flash-warn">
  Although this application does not log any details, you should not enter any real credentials into this form. To use this example, enter <kbd>guest</kbd> as the user name, and <kbd>testing1</kbd> as the password.
</div>

<form method="post">
  <dl class="form-group">
      <?php if ($invalidToken != 0) {?>
      <div class="flash flash-error">
        Invalid anti-forgery token.
      </div>
      <?php } elseif ($attempted != 0) {?>
      <div class="flash flash-error">
        Invalid user name or password.
      </div>
    <?php }?>
    <input type="hidden" name="token" value="<?php echo $fakeToken ?>">
    <dt><label for="username">User name</label></dt>
    <dd><input class="form-control" type="text" id="username" name="username"></dd>
    <dt><label for="password">Password</label></dt>
    <dd><input class="form-control" type="password" id="password" name="password" autocomplete="off"></dd>
  </dl>
  <div class="form-actions">
    <button name="submit" type="submit" class="btn btn-primary">Log in</button>
  </div>
</form>

<h3>Learn More</h3>

<ul>
  <li><a href="<?php echo getWebCopyUserManualUrl('forms') ?>">WebCopy Form Settings</a></li>
</ul>

<?php renderFeaturesTemplateEnd();?>
