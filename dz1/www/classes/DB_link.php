<?php

class DB_link {
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('test');
    }

    public  function queryAll($sql, $class = 'stdClass')
    {
        $res = mysql_query($sql);
        if (false === $res) {
            return false;
        }
        $ret = [];
        while (false!== $row = mysql_fetch_object($res, $class)){
            $ret[] = $row;
        }
        return $ret;
    }
    public function queryOne($sql, $class = 'stdClass')
    {
        return $this->queryAll($sql, $class)[0];
    }

    public function Sql_exec($sql)
    {
       return mysql_query($sql);
    }

}