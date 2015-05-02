<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

parse_str($_SERVER['QUERY_STRING'], $params);

switch (strtolower($params['section'])) {
case 'alpha':
    $title = 'Alpha Testing';
    $body  = '<p>The alpha phase of the release life cycle is the first phase to begin software testing (alpha is the first letter of the Greek alphabet, used as the number 1). In this phase, developers generally test the software using white-box techniques. Additional validation is then performed using black-box or gray-box techniques, by another testing team. Moving to black-box testing inside the organization is known as <em>alpha release</em>.</p>
              <p>Alpha software can be unstable and could cause crashes or data loss. In general, external availability of alpha software is uncommon in proprietary software, while open source software often has publicly available alpha versions. The alpha phase usually ends with a feature freeze, indicating that no more features will be added to the software. At this time, the software is said to be feature complete.</p>';
    break;

case 'beta':
    $title = 'Beta Testing';
    $body  = '<p>Beta, named after the second letter of the Greek alphabet, is the software development phase following alpha. Software in the beta stage is also known as betaware. It generally begins when the software is feature complete but likely to contain a number of known or unknown bugs. Software in the beta phase will generally have many more bugs in it than completed software, as well as speed/performance issues and may still cause crashes or data loss. The focus of beta testing is reducing impacts to users, often incorporating usability testing. The process of delivering a beta version to the users is called <em>beta release</em> and this is typically the first time that the software is available outside of the organization that developed it. Beta version software is often useful for demonstrations and previews within an organization and to prospective customers. Some developers refer to this stage as a <em>preview</em>, <em>prototype</em>, <em>technical preview</em> / <em>technology preview</em> (<em>TP</em>), or <em>early access</em>. Some software is kept in perpetual beta, where new features and functionality are continually added to the software without establishing a firm "final" release.</p>
              <p><em>Beta testers</em> are people who actively report issues of beta software. They are usually customers or representatives of prospective customers of the organization that develops the software. Beta testers tend to volunteer their services free of charge but often receive versions of the product they test, discounts on the release version, or other incentives.</p>';
    break;

default:
    $title = 'Nothing';
    $body  = '<p>Nothing to see here.</p>';
}


  define('PAGE_TITLE', $title);

  renderFeaturesTemplateStart(); 
 
?>

<?php 

  echo $body;

?>

  <p>The query string used to generate this request was:</p>

  <p><strong><?php echo $_SERVER['QUERY_STRING'] ?></strong></p>

<?php renderFeaturesTemplateEnd(); ?>
