<?php
namespace Anax\View;

$filter = new \Mahm\Filter\TextFilter();
$text = file_get_contents(__DIR__ . "/text/sample.md");
$html = $filter->parse($text, ["markdown"]);

?>
<!DOCTYPE html>
<body>
    <h1>BBCode textfilter</h1>
    <h3>Här är original texten</h3>
    <pre><?= $text ?></pre>
    <h3>Här är texten när den har gått genom ett textfilter</h3>
    <pre><?= $html ?></pre>
</body>
