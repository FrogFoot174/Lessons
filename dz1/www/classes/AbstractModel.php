<?php
abstract class AbstractModel {

    protected static  $table;


    public static function findAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB_link();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function findOneByPk($id)
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM articles WHERE id=:id';
        $db = new DB_link();
        $db->setClassName($class);
        return $db->query($sql, [':id' => $id]);
    }

//    protected static $class;
//    protected  static  $title;
//    protected  static  $path;
//
//    public static function getAll()
//    {
//        $db_link = new DB_link();
//        $sql = 'SELECT * FROM ' . static::$table;
//        return $db_link->queryAll($sql, static::$class);
//    }
//
//    public static function getOne($id)
//    {
//        $db_link = new DB_link();
//        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=' . $id;
//        return $db_link->queryOne($sql, static::$class);
//    }
//
//    public static function insertDB()
//    {
//        $sql = 'INSERT INTO ' . static::$table . '(title, path)' .
//                'VALUES (' . static::$title . ', ' . static::$path . ')';
//        $db_link = new DB_link();
//        return $db_link->Sql_exec($sql);
//    }
//
}