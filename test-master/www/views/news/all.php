<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<script><?php foreach ($items as $item): ?></script>
<div  style="border: solid; border-bottom-color:  deepskyblue; border-top-color: deepskyblue; border-left: none;
border-right: none; width: 1025px; margin-bottom: 25px">
<?php echo $item->title; ?> <a href="?id=<?php echo $item->id ?>&act=One">Читать далее </a></div>
<script><?php endforeach; ?></script>
</body>
</html>




