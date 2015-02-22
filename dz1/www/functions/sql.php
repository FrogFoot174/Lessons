<?php

class Sql_Connect {

    public function Sql_connect()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('test');
    }

    public  function Sql_query($sql)
    {
        $res = mysql_query($sql);
        $ret = [];
        while (false!== $row = mysql_fetch_assoc($res)){
            $ret[] = $row;
        }
        return $ret;
    }
}

class Sql_Exe
{
    public function Sql_exec($sql)
    {
        $Sql_Connect = new Sql_Connect;
        $Sql_Connect->Sql_connect();
        mysql_query($sql);
    }
}
