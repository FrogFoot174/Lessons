<?php

require __DIR__ . '/models/news.php';

$articles = News_getAll();

include __DIR__ . '/views/index.php';
