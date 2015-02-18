<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
        <?php foreach ($articles as $article): ?>
    <div style="border: solid; border-color:  deepskyblue; width: 1025px; margin-bottom: 25px">
        <img src="<?php echo '.' . $article['path']; ?>" alt=""/>
    </div>
        <?php endforeach ?>
        <a href="./add.php">Добавьте новость сами</a>
</body>
</html>
