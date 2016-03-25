<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Frameset Test');

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo(PAGE_TITLE . ' &bull; ' . SITE_TITLE)?></title>

    <link rel="stylesheet" href="/assets/css/primer.css">
    <link rel="stylesheet" href="/assets/css/site.css">

    <link rel="icon" href="/favicon.ico">
  </head>

  <frameset cols="30%,*">
    <frame src="frame1.php" name="frame1" />
    <frame src="frame2.php" name="frame2" />
    <noframes>
      <body>
        <p>This text will appear only if the browser does not support frames.</p>
        <p><img src="/assets/img/city10.png" alt="city10"/></p>
      </body>
    </noframes>
  </frameset>

</html>