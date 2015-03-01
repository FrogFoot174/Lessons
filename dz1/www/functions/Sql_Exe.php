<?php
class Sql_Exe
{
    public function Sql_exec($sql)
    {
        $db_link = new DB_link('localhost', 'root', '', 'test');
        mysql_query($sql);
    }
}