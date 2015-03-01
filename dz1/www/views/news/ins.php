<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="./add.php" method="post" enctype="multipart/form-data">
    <label for="title">Заголовок</label>
    <input type="text" id="title" name="title"/>
    <label for="article">Ваш файл</label>
    <input type="file" id="article" name="article"/>
    <input type="submit" />
</form>
<a href="./">На главную</a>
<br>
<br>
</body>
</html>