<header class="masthead">
  <div class="container">
    <a href="/" class="masthead-logo">
      <img class="mega-octicon octicon-package" src="/assets/img/logo.png" alt="Logo" />
      <?php echo SITE_TITLE; ?>
    </a>

    <nav class="masthead-nav">
      <a href="/statuscodes/index.php">Status Codes</a>
      <a href="/features/index.php">Features</a>
      <a href="/css/index.php">CSS</a>
      <a href="/html/index.php">HTML</a>
      <a href="/javascript/index.php">JavaScript</a>
      <?php if(isset($_SESSION['friendlyname'])) { ?>
      <a href="/features/authenticationprofile.php">
        <img class="avatar avatar-small" src="/assets/img/avatar.png" width="24" height="24"> <?php echo $_SESSION['friendlyname'] ?>
      </a>
      <?php } ?>
    </nav>

  </div>
</header>