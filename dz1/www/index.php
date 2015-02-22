<?php

require __DIR__ . '/models/news.php';

$News_GetAll = new News_GetAll;
$articles = $News_GetAll->News_getAll();

include __DIR__ . '/views/index.php';
