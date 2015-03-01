<?php
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
