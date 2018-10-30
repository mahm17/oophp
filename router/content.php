<?php

$app->router->get("content", function () use ($app) {

    $title = [
        "title" => "Alla bloggposter",
    ];

    $app->db->connect();
    $sql = <<<EOD
    SELECT *,
    DATE_FORMAT(COALESCE(updated, published), '%Y-%m-%dT%TZ') AS published_iso8601,
    DATE_FORMAT(COALESCE(updated, published), '%Y-%m-%d') AS published
    FROM content;
EOD;
    $resultset = $app->db->executeFetchAll($sql);
    $filter = new \Mahm\Filter\TextFilter();
    foreach ($resultset as $value) {
        if (!is_null($value->filter)) {
            $pageFilter = explode(",", $value->filter);
            $value->data = $filter->parse($value->data, $pageFilter);
        }
    }

    $app->page->add("content/content", [
        "resultset" => $resultset,
    ]);

    return $app->page->render($title);
});

$app->router->get("content/admin", function () use ($app) {

    $title = [
        "title" => "Alla bloggposter | Admin",
    ];

    $app->db->connect();
    $sql = "SELECT * FROM content;";
    $resultset = $app->db->executeFetchAll($sql);

    $app->page->add("content/admin", [
        "resultset" => $resultset,
    ]);

    return $app->page->render($title);
});

$app->router->any(["GET", "POST"], "content/add", function () use ($app) {

    $title = [
        "title" => "Lägg till ny post",
    ];

    $app->db->connect();
    $contentTitle = $app->request->getPost("contentTitle");

    if ($app->request->getPost("add")) {
        $sql = "INSERT INTO content (title) VALUES (?);";
        $app->db->executeFetchAll($sql, [$contentTitle]);
        header("Location: ../content/admin");
        exit;
    }

    $app->page->add("content/add");

    return $app->page->render($title);
});

$app->router->any(["GET", "POST"], "content/update/{id}", function ($id) use ($app) {

    $title = [
        "title" => "Uppdatera bloggpost",
    ];

    $app->db->connect();
    $sql = "SELECT * FROM content WHERE id = ?;";
    $resultset = $app->db->executeFetchAll($sql, [$id]);

    $contentTitle = $app->request->getPost("contentTitle");
    $contentPath = $app->request->getPost("contentPath");
    $contentSlug = $app->request->getPost("contentSlug");
    $contentData = $app->request->getPost("contentData");
    $contentType = $app->request->getPost("contentType");
    $contentFilter = $app->request->getPost("contentFilter");
    $contentPublish = $app->request->getPost("contentPublish");

    $slugs = "SELECT slug FROM content WHERE slug LIKE ?";
    $found = $app->db->executeFetchAll($slugs, [$contentSlug . "%"]);

    if (!$contentSlug) {
        $contentSlug = slugify($contentTitle);
    }

    if (!$contentPath) {
        $contentPath = null;
    }

    if ($app->request->getPost("doSave")) {
        foreach ($found as $f) {
            if ($f->slug == $contentSlug) {
                $contentSlug = slugify($contentTitle) . "-" . $id;
            }
        }
        $sql = "UPDATE content SET title = ?,
        path = ?,
        slug = ?,
        data = ?,
        type = ?,
        filter = ?,
        published = ?,
        updated = NOW()
        WHERE id = ?";
        $app->db->execute($sql, [$contentTitle,
            $contentPath,
            $contentSlug,
            $contentData,
            $contentType,
            $contentFilter,
            $contentPublish,
            $id
        ]);
        header("Location: ../../content/admin");
        exit;
    }

    $app->page->add("content/update", [
        "resultset" => $resultset,
    ]);

    return $app->page->render($title);
});

$app->router->any(["GET", "POST"], "content/delete/{id:digit}", function (int $id) use ($app) {
    $title = "Ta bort post";

    $app->db->connect();
    $sql = "SELECT * FROM content WHERE id = ?";
    $resultset = $app->db->executeFetchAll($sql, [$id]);

    $contentTitle = $app->request->getPost("contentTitle");
    $contentPath = $app->request->getPost("contentPath");
    $contentSlug = $app->request->getPost("contentSlug");
    $contentData = $app->request->getPost("contentData");
    $contentType = $app->request->getPost("contentType");
    $contentFilter = $app->request->getPost("contentFilter");
    $contentPublish = $app->request->getPost("contentPublish");

    if ($app->request->getPost("delete")) {
        $sql = "UPDATE content SET deleted = NOW()
        WHERE id = ?";
        $app->db->execute($sql, [$id]);
        header("Location: ../../content/admin");
        exit;
    }

    $app->page->add("content/delete", [
        "resultset" => $resultset,
    ]);

    return $app->page->render([
        "title" => $title,
    ]);
});

$app->router->get("content/posts", function () use ($app) {
    $title = "Alla poster";

    $app->db->connect();
    $sql = <<<EOD
    SELECT *,
    DATE_FORMAT(COALESCE(updated, published), '%Y-%m-%dT%TZ') AS published_iso8601,
    DATE_FORMAT(COALESCE(updated, published), '%Y-%m-%d') AS published
    FROM content
    WHERE type = 'post';
EOD;
    $resultset = $app->db->executeFetchAll($sql);

    $app->page->add("content/post", [
        "resultset" => $resultset,
    ]);

    return $app->page->render([
        "title" => $title,
    ]);
});

$app->router->get("content/pages", function () use ($app) {
    $title = "Alla pages";

    $app->db->connect();
    $sql = <<<EOD
    SELECT *,
    DATE_FORMAT(COALESCE(updated, published), '%Y-%m-%dT%TZ') AS published_iso8601,
    DATE_FORMAT(COALESCE(updated, published), '%Y-%m-%d') AS published
    FROM content WHERE type = 'page';
EOD;
    $resultset = $app->db->executeFetchAll($sql);

    $app->page->add("content/page", [
        "resultset" => $resultset,
    ]);

    return $app->page->render([
        "title" => $title,
    ]);
});

$app->router->get("content/{title}", function ($title) use ($app) {
    $title = "$title";

    $app->db->connect();
    $sql = "SELECT *,
    DATE_FORMAT(COALESCE(updated, published), '%Y-%m-%dT%TZ') AS modified_iso8601,
    DATE_FORMAT(COALESCE(updated, published), '%Y-%m-%d') AS modified
    FROM content WHERE title = ?;";
    $resultset = $app->db->executeFetchAll($sql, [$title]);
    $res = $resultset[0];
    $filter = new \Mahm\Filter\TextFilter();
    if (!is_null($res->filter)) {
        $pageFilter = explode(",", $res->filter);
        $filtered = $filter->parse($res->data, $pageFilter);
    }

    $app->page->add("content/specific", [
        "resultset" => $resultset,
        "filtered" => $filtered,
    ]);

    return $app->page->render([
        "title" => $title,
    ]);
});
