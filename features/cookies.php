<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  $domain = getRealHost();
  $expires = time() + 3600;
  $song = "I am the very model of a modern Major-General,
I've information vegetable, animal, and mineral,
I know the kings of England, and I quote the fights historical
From Marathon to Waterloo, in order categorical;
I'm very well acquainted, too, with matters mathematical,
I understand equations, both the simple and quadratical,
About binomial theorem I'm teeming with a lot o' news,
With many cheerful facts about the square of the hypotenuse.
\t\t\t";

  setcookie('CrawlDemo_Session', 'alpha');
  setcookie('CrawlDemo_Expires', 'beta', $expires);
  setcookie('CrawlDemo_Path', 'gamma', $expires, '/features/');
  setcookie('CrawlDemo_Domain', 'delta', $expires, '/', $domain);
  setcookie('CrawlDemo_Secure', 'epsilon', $expires, '/', null, true);
  setcookie('CrawlDemo_HttpOnly', 'zeta', $expires, '/', null, false, true);
  setcookie('CrawlDemo_Song', $song, $expires);

  define('PAGE_TITLE', 'Cookies');

  renderFeaturesTemplateStart(); 

?>

  <p>An HTTP cookie (also called web cookie, Internet cookie, browser cookie, or simply cookie) is a small piece of data sent from a website and stored on the user's computer by the user's web browser while the user is browsing. Cookies were designed to be a reliable mechanism for websites to remember stateful information (such as items added in the shopping cart in an online store) or to record the user's browsing activity (including clicking particular buttons, logging in, or recording which pages were visited in the past). They can also be used to remember arbitrary pieces of information that the user previously entered into form fields such as names, addresses, passwords, and credit card numbers. </p>

  <p>Other kinds of cookies perform essential functions in the modern web. Perhaps most importantly, authentication cookies are the most common method used by web servers to know whether the user is logged in or not, and which account they are logged in with. Without such a mechanism, the site would not know whether to send a page containing sensitive information, or require the user to authenticate themselves by logging in. The security of an authentication cookie generally depends on the security of the issuing website and the user's web browser, and on whether the cookie data is encrypted. Security vulnerabilities may allow a cookie's data to be read by a hacker, used to gain access to user data, or used to gain access (with the user's credentials) to the website to which the cookie belongs.</p>

  <p>The cookies provided when requesting this page were</p>

  <?php printArray($_COOKIE); ?>

  <h3>Learn More</h3>

  <ul>
    <!-- <li><a href="<?php echo getWebCopyUserManualUrl('customheaders') ?>">WebCopy Custom Header Settings</a></li> -->
    <li><a href="<?php echo getWikipediaUrl('HTTP_cookie') ?>">More on Wikipedia</a></li>
  </ul>

<?php renderFeaturesTemplateEnd(); ?>
