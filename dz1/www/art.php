<?php
require __DIR__ . '/models/news.php';
$articles = News_getAll();
foreach ($articles as $article) {
    if ($article['id'] !== $_GET[id]) {
        continue;
    }
    else {
        $view_Article = $article['path'];
        include __DIR__ . '/views/art.php';
    }
} ?>
