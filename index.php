<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$content = "";

require_once("html.php");
if (!empty($_REQUEST['page'])){
    $page = $_REQUEST['page'];
    switch ($page) {
        case "howto" :
            $content = getHowToContent();
            break;
        case "snippets" :
            $content = getSnippetsContent();
            break;
        case "tools" :
            $content = getToolsContent();
            break;
        case "imprint" :
            $content = getImprintContent();
            break;
    }
} else {
    require_once("color.php");
    $content = getColoringContent($iri, $hexColor, $error);
}

$html = 
'
<html>
  <head>
    <link rel="stylesheet" href="color.css" type="text/css" media="screen" />
  </head>
  <body>
    <div id="wrapper">
        <div id="content">
            <div id="links">
                <a href="index.php">Home</a>&nbsp;|&nbsp;
                <a href="index.php?page=howto">HowTo</a>&nbsp;|&nbsp;
                <a href="index.php?page=snippets">Snippets</a>&nbsp;|&nbsp;
                <a href="index.php?page=tools">Tools</a>&nbsp;|&nbsp;
                <a href="index.php?page=imprint">Imprint</a>
            </div>
            <h1>Colour the Linked Data Web!</h1>
            '.$content.'
        </div>
    </div>
  </body>
</html>
';
echo $html;
?>
