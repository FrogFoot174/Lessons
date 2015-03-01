<?php

class News
    extends AbstractModel
{

    public $id;
    public $title;
    public $path;

    protected static $table = 'articles';
    protected static $class = 'News';

}