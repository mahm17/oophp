<?php
namespace Anax\View;

$filter = new \Mahm\Filter\TextFilter();
$text = file_get_contents(__DIR__ . "/text/bbcode.txt");
$html = $filter->parse($text, ["bbcode"]);

?>
<!DOCTYPE html>
<body>
    <h1>BBCode textfilter</h1>
    <h3>Här är original texten</h3>
    <pre><?= $text ?></pre>
    <h3>Här är texten när den har gått genom ett textfilter inklusive nl2br</h3>
    <pre><?= $html ?></pre>
</body>
