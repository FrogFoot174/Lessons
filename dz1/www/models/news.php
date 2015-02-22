<?php
require_once __DIR__ . '/../functions/sql.php';

class News_GetAll
{
    public function News_getAll()
    {
        $sql = 'SELECT * FROM articles';
        $Sql_Connect = new Sql_Connect;
        return $Sql_Connect->Sql_query($sql);
    }
}
class News_Ins
{
    public function News_insert($data)
    {
        $sql = "INSERT INTO articles
                (title, path)
                VALUES ('" . $data['title'] . "', '" . $data['article'] . "') ";

        $Sql_Exec = new Sql_Exe;
        $Sql_Exec->Sql_exec($sql);
    }
}
