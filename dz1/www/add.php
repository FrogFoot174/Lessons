<?php
error_reporting(E_ALL);
require __DIR__ . '/functions/File_upload.php';
if (!empty ($_POST)) {
    $data = [];
    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }

    if  (!empty($_FILES)) {
        $res = File_upload('article');
        if (false !== $res) {
            $data['article'] = $res;
        }
    }

}
var_dump($data); die;

//include __DIR__ . '/views/add_view.php';