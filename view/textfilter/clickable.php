<?php
namespace Anax\View;

$filter = new \Mahm\Filter\TextFilter();
$text = file_get_contents(__DIR__ . "/text/clickable.txt");
$html = $filter->parse($text, ["link"]);
?>
<!DOCTYPE html>
<body>
    <h1>Clickable textfilter</h1>
    <h3>Här är original texten</h3>
    <pre><?= $text ?></pre>
    <h3>Här är texten när den har gått genom ett textfilter</h3>
    <pre><?= $html ?></pre>
</body>
