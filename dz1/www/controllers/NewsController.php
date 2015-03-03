<?php
class NewsController
{

    public function actionAll()
    {
//        $db = new DB_link;
//        $res = $db->query('SELECT * FROM articles');
//        var_dump($res);

        var_dump(NewsModel::findAll());
        echo '<br>';

//        die;
//        $items = News::getAll();
//        $view = new View;
//        $view->items = $items;
//        $view->display('news/all.php');
    }

    public function actionOne()
    {
        var_dump(NewsModel::findOneByPk($_GET['id']));

//        $db = new DB_link;
//        $res = $db->query('SELECT * FROM articles WHERE id=:id', [':id' => $_GET['id']]);
//        var_dump($res);
//        die;

//        $id = $_GET['id'];
//        $item = News::getOne($id);
//        $view = new View;
//        $view->item = $item;
//        $view->display('news/one.php');
    }

    public function actionIns()
    {
        $ins_flag = NewsModel::insertDB();
        $view = new View;
        $view->display('news/ins.php');
    }

}