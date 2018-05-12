<?php 

function renderH1($text)
{
    echo '<h1>' . $text . '</h1>';
}

function renderH3($text)
{
    echo '<h3>' . $text . '</h3>';
}

function renderCoreTemplateStart($extraHeadHtml = null)
{
    $defaultTitle = SITE_TITLE;
    $title = PAGE_TITLE;

    if ($title <> $defaultTitle) {
        $title = $title . ' &bull; ' . $defaultTitle;
    };

    echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>' . $title . '</title>

    <link rel="stylesheet" href="/assets/css/primer.css">
    <link rel="stylesheet" href="/assets/css/site.css">

    <link rel="icon" href="/favicon.ico">' . "\n" . $extraHeadHtml . '
  </head>
  <body>';
}

function renderTemplateStart($extraHeadHtml = null)
{
    renderCoreTemplateStart($extraHeadHtml);

    include_once LIBDIR . 'header.php';
}

function renderCoreTemplateEnd()
{
    echo '  </body>
</html>';
}
function renderTemplateEnd()
{
    echo '      </div>
  </div>
</div>';
    
    include_once LIBDIR . 'footer.php';

    renderCoreTemplateEnd();
}

function renderSidebarTemplateStart($sidebarFunctionName, $extraHeadHtml = null)
{
    renderTemplateStart($extraHeadHtml);

    echo '<div class="container">
  <div class="columns">

    <div class="one-fourth column">';
    
    call_user_func($sidebarFunctionName);

    echo '    </div>

    <div class="three-fourths column body">';

    renderH1(PAGE_TITLE);
}

function renderSidebarTemplateEnd()
{
    echo '    </div>

  </div>
</div>';

    renderTemplateEnd();
}

function renderStatusCodesTemplateStart($extraHeadHtml = null)
{
    renderSidebarTemplateStart('createFullHttpNavBar', $extraHeadHtml);
}

function renderStatusCodesTemplateEnd()
{
    renderSidebarTemplateEnd();
}

function renderFeaturesTemplateStart($extraHeadHtml = null)
{
    renderSidebarTemplateStart('createFeaturesNavBar', $extraHeadHtml);
}

function renderFeaturesTemplateEnd()
{
    renderSidebarTemplateEnd();
}

function renderHttpMethodsTemplateStart($extraHeadHtml = null)
{
    renderSidebarTemplateStart('createHttpMethodsNavBar', $extraHeadHtml);
}

function renderHttpMethodsTemplateEnd()
{
    renderSidebarTemplateEnd();
}

function renderHtmlTemplateStart($extraHeadHtml = null)
{
    renderSidebarTemplateStart('createHtmlNavBar', $extraHeadHtml);
}

function renderHtmlTemplateEnd()
{
    renderSidebarTemplateEnd();
}

function renderCssTemplateStart($extraHeadHtml = null)
{
    renderSidebarTemplateStart('createCssNavBar', $extraHeadHtml);
}

function renderCssTemplateEnd()
{
    renderSidebarTemplateEnd();
}

function renderJavaScriptTemplateStart($extraHeadHtml = null)
{
    renderSidebarTemplateStart('createJavaScriptNavBar', $extraHeadHtml);
}

function renderJavaScriptTemplateEnd()
{
    renderSidebarTemplateEnd();
}
?>