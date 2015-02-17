<?php
require_once __DIR__ . '/../functions/sql.php';
function News_getAll ()
{
    Sql_connect();
    $sql = 'SELECT * FROM articles';
    $res = mysql_query($sql);
    $ret = [];
    while (false!== $row = mysql_fetch_assoc($res)){
    $ret[] = $row;
}
    return $ret;
}

function News_insert($data)
{

}