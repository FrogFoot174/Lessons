<?php
class NewsModel
    extends AbstractModel
{
    protected static $table = 'articles';
    protected static $class = 'NewsModel';

    public $id;
    public $title;
    public $path;

}
