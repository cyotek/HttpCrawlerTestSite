<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 
 
  $tests = array(
  'Run Basic Test'  => '401basic.php',
  'Run Digest Test' => '401digest.php',
  );

  renderHttpStatusTestPage(401, $tests, 'passwords');
 
?>