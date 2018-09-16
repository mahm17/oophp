<?php
/**
 * Create routes using $app programming style.
 */
//var_dump(array_keys(get_defined_vars()));



/**
 * Showing message Hello World, not using the standard page layout.
 */
$app->router->any(["GET", "POST"], "gissa/", function () use ($app) {
    // include __DIR__ . "/../htdocs/guess/index_session.php";

    $title = [
        "title" => "Spela gissa mitt nummer.",
    ];

    $number = $_POST["number"] ?? -1;
    $tries = $_POST["tries"] ?? 6;
    $guess = $_POST["guess"] ?? null;

    // session_name("guess");
    // session_start();

    if (!isset($_SESSION["game"])) {
        $_SESSION["game"] = new \Mahm\Guess\Guess($number, $tries);
    }

    $object = $_SESSION["game"];

    $res = null;
    if (isset($_POST["doGuess"])) {
        $res = $object->makeGuess($guess);
    }

    if (isset($_POST["reset"])) {
        $object->random();
        header("Location: gissa/");
        exit;
    }

    $data["object"] = $object;
    $data["res"] = $res;
    $data["guess"] = $guess;

    $app->view->add("guess/session", $data);
    return $app->page->render($title);
});

$app->router->any(["GET", "POST"], "post/", function () use ($app) {
    $title = [
        "title" => "POST",
    ];

    $number = $_POST["number"] ?? -1;
    $tries = $_POST["tries"] ?? 6;
    $guess = $_POST["guess"] ?? null;

    $object = new \Mahm\Guess\Guess($number, $tries);

    if (isset($_POST["reset"])) {
        $object->random();
    }

    $res = null;
    if (isset($_POST["doGuess"])) {
        $res = $object->makeGuess($guess);
    }

    $data["object"] = $object;
    $data["res"] = $res;
    $data["guess"] = $guess;

    $app->view->add("guess/session", $data);
    return $app->page->render($title);
});

$app->router->get("get/", function () use ($app) {
    $title = [
        "title" => "POST",
    ];

    $number = $_GET["number"] ?? -1;
    $tries = $_GET["tries"] ?? 6;
    $guess = $_GET["guess"] ?? null;

    $object = new \Mahm\Guess\Guess($number, $tries);

    $res = null;
    if (isset($_GET["doGuess"])) {
        $res = $object->makeGuess($guess);
    }

    if (isset($_GET["reset"])) {
        $object->random();
    }

    $data["object"] = $object;
    $data["res"] = $res;
    $data["guess"] = $guess;

    $app->view->add("guess/get", $data);
    return $app->page->render($title);
});

$app->router->get("destroy/", function () use ($app) {
    $title = [
        "title" => "Förstör session"
    ];
    session_destroy();
    $app->view->add("guess/destroy");
    return $app->page->render($title);
});
