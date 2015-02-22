<?php
require __DIR__ . '/models/news.php';

$News_GetAll = new News_GetAll;
$articles = $News_GetAll->News_getAll();

foreach ($articles as $article) {
    if ($article['id'] !== $_GET['id']) {
        continue;
    }
    else {
        $view_Article = $article['path'];
        include __DIR__ . '/views/art.php';
    }
} ?>
