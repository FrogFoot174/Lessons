<?php
class Counter
{
    // Скрытый статический член класса общий для всех объектов
    public static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
    }

    public static function getCount()
    {
        return self::$count;
    }

}
//Создаем 6 объектов
for ($objs=array(), $i=0; $i<6; $i++)
{
$objs[] = new Counter();
    echo Counter::$count;
}
echo "Сейчас существует  ".Counter::getCount()." объектов.<br>";
$objs[5] = null;
echo "А теперь -  ".Counter::getCount()." объектов.<br>";
$objs = array();
echo "Под конец осталось ".Counter::getCount()." объектов.<br>";
?>

