<div class="container">
  <footer class="footer">
    <p class="copyright">Copyright &copy; 2015-2018 Cyotek Ltd. All Rights Reserved.</p>
    <p class="version">Website version <?php echo WEBSITE_VERSION ?></p>
    <p>
      <a href="/about.php">About</a>
      <a href="/changelog.php">Change Log</a>
      <a href="mailto:support@cyotek.com?subject=<?php echo str_replace('+', '%20', urlencode(SITE_TITLE . ' Feedback (' . $_SERVER["REQUEST_URI"] . ')')) ?>">Comments or suggestions?</a>
    </p>
  </footer>
</div>
