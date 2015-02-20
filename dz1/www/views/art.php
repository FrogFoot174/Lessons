<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
    <div style="border: solid; border-color:  deepskyblue; width: 1025px; margin-bottom: 25px">
        <?php  readfile( '.' . $view_Article);?>
    </div>
    <a href="./">На главную</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="./add.php">Добавьте новость сами</a>
</body>
</html>