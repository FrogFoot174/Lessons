<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php foreach ($articles as $article): ?>
        <?php echo $article['title']; ?>
    <?php endforeach ?>
</body>
</html>
