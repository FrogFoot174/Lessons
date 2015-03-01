<?php
require_once __DIR__ . '/aload.php';
//$actionnews_getall = new actionNews_GetAll;
$articles = News::getAll();

foreach ($articles as $article) {
    //  echo $article->id . '<br>' . $article->path;           die;     var_dump($article);
    if ($article->id !== $_GET['id']) {
        continue;
    }
    else {
        $ac = $article->path;
        include __DIR__ . './views/news/one.php';
    }
} ?>
