<?php

$app->router->get("filter", function () use ($app) {

    $title = [
        "title" => "Textfilter",
    ];

    $app->view->add("textfilter/index");
    return $app->page->render($title);
});

$app->router->get("filter/bbcode", function () use ($app) {

    $title = [
        "title" => "BBCode filter",
    ];

    $app->view->add("textfilter/bbcode");
    return $app->page->render($title);
});

$app->router->get("filter/clickable", function () use ($app) {

    $title = [
        "title" => "Clickable filter",
    ];

    $app->view->add("textfilter/clickable");
    return $app->page->render($title);
});

$app->router->get("filter/markdown", function () use ($app) {

    $title = [
        "title" => "Markdown filter",
    ];

    $app->view->add("textfilter/markdown");
    return $app->page->render($title);
});

$app->router->get("filter/parse", function () use ($app) {

    $title = [
        "title" => "Parse filter",
    ];

    $app->view->add("textfilter/parse");
    return $app->page->render($title);
});
