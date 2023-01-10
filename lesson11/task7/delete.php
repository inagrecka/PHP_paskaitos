<?php

echo 'DELETED';

$fileItems = file_get_contents('new.json');
$todoList = json_decode($fileItems, true);

unset($todoList[$_POST['id']]);
var_dump($_POST['id']);

$updatedList = json_encode($todoList, JSON_PRETTY_PRINT);
file_put_contents('new.json', $updatedList);
?>

<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<a href="index.php">BACK</a>
</body>
</html>
