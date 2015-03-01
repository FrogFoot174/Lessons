<?php
class News extends AbstractModel
{
    public $id;
    public static  $title;
    public static  $path;

    protected static $table = 'articles';
    protected static $class = 'News';
}
