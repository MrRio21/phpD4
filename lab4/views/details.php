<?php
$db = new Db;
$db->constructor(DbHost,DbUser,DbPass,DbName);
$id = (isset($_GET["id"])&& is_numeric($_GET["id"]))?$_GET["id"]:17;
$item= $db->getRowData($id);
print_r($item) ;


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center"><?php echo $item["product_name"] ?></h1>
    <img src="./imgs/<?php echo $item["Photo"] ?> "/>
</body>
</html>

