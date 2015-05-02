<?php require_once __DIR__ . '/prepend.php'; ?>

<?php
  $tests = array(
  'Run Internal Test'  => '404test.html',
  'Run External Test' => 'http://notfound.cyotek.com',
  );

  renderHttpStatusTestPage(404, $tests);
?>