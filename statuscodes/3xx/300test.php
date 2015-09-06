<?php

  $html = '
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>300 Multiple Choices</title>
</head><body>
<h1>Multiple Choices</h1>
The document name you requested (<code>/statuscodes/3xx/30.php</code>) could not be found on this server.
However, we found documents with names similar to the one you requested.<p>Available documents:
<ul>
<li><a href="/statuscodes/3xx/302.php">/statuscodes/3xx/302.php</a> (character missing)
<li><a href="/statuscodes/3xx/303.php">/statuscodes/3xx/303.php</a> (character missing)
<li><a href="/statuscodes/3xx/304.php">/statuscodes/3xx/304.php</a> (character missing)
<li><a href="/statuscodes/3xx/307.php">/statuscodes/3xx/307.php</a> (character missing)
<li><a href="/statuscodes/3xx/308.php">/statuscodes/3xx/308.php</a> (character missing)
<li><a href="/statuscodes/3xx/301.php">/statuscodes/3xx/301.php</a> (character missing)
<li><a href="/statuscodes/3xx/300.png">/statuscodes/3xx/300.png</a> (top secret injected link)
</ul>
</body></html>
';

  header('HTTP/1.1 300 Multiple Choices');
  header('Content-Type: text/html');
  header('Content-Length: ' . strlen($html));

  echo $html;
?>
