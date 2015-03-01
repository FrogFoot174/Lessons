<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<script><?php $arts = file_get_contents(__DIR__ . '/../../' . $item->path); ?></script>
<div style="border: solid; border-bottom-color:  deepskyblue; border-top-color: deepskyblue; border-left: none;
border-right: none; width: 1225px; margin-bottom: 25px">
    <?php echo $arts;?></div>
</body>
</html>
