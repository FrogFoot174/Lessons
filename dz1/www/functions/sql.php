<?php

class Sql_Connect {
    public function __construct($host_owner, $log_name, $passwd, $db_name)
    {
        $this->host_owner = $host_owner;
        $this->log_name = $log_name;
        $this->passwd = $passwd;
        $this->db_name = $db_name;
        mysql_connect($host_owner, $log_name, $passwd);
        mysql_select_db($db_name);
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
        $Sql_Connect = new Sql_Connect('localhost', 'root', '', 'test');
//        $Sql_Connect->Sql_connect();
        mysql_query($sql);
    }
}
