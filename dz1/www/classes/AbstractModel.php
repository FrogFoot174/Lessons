<?php
abstract class AbstractModel {

    protected static  $table;
    protected static $class;
    protected  static  $title;
    protected  static  $path;

    public static function getAll()
    {
        $db_link = new DB_link();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db_link->queryAll($sql, static::$class);
    }

    public static function getOne($id)
    {
        $db_link = new DB_link();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=' . $id;
        return $db_link->queryOne($sql, static::$class);
    }

    public static function insertDB()
    {
        $sql = 'INSERT INTO ' . static::$table . '(title, path)' .
                'VALUES (' . static::$title . ', ' . static::$path . ')';
        $db_link = new DB_link();
        return $db_link->Sql_exec($sql);
    }

}