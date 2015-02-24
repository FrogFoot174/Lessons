<?php
function __autoload($classname)
{
    if (file_exists($classname)) {
        require __DIR__ . '/models/news.php';
    }
    elseif (file_exists($classname)) {
        require __DIR__ . '/functions/sql.php';
    }
    elseif (file_exists($classname)) {
        require __DIR__ . '/functions/File_upload.php';
    }
}
