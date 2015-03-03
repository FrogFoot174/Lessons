<?php

class DB_link {

    private  $dbh;
    private $className = 'stdClass';

    public function __construct()
    {
        $this->dbh = new PDO('mysql: host=localhost; dbname=test', 'root', '');
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function query($sql, $params=[])
    {
        $sth =$this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

}