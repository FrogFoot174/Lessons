<?php
require __DIR__ . '/models/news.php';
require __DIR__ . '/functions/File_upload.php';
if (!empty ($_POST)) {
    $data = [];
    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }
    if (!empty($_FILES)) {
        $res = File_upload('article');
        if (false !== $res) {
            $data['article'] = $res;
        }
    }
    if (isset($data['title']) and isset($data['article'])) {
        News_insert($data);
        header('Location: index.php');
        die;
    }
}
include __DIR__ . '/views/add.php';
