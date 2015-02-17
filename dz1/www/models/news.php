<?php
require_once __DIR__ . '/../functions/sql.php';
function News_getAll ()
{
    $sql = 'SELECT * FROM articles';
    return Sql_query($sql);
}

function News_insert($data)
{

}