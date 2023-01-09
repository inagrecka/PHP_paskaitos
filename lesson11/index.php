<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="submit.php">
    <label for="todoInput"> New TODO list </label>
    <br>
    <input type="text" id="todoInput" name="todo" placeholder="ToDo"/>
    <input type="submit">
</form>

<!--
DARBO EIGA:
1. nuskaitome JSON failą;
2. konvertuojam į MASYVĄ;
3. paleidžiam FOREACH ciklą
-->

<?php
$fileItems = file_get_contents('new.json');
$todoList = json_decode($fileItems, true);
?>

<h1> ToDo list: </h1>
<ul>
    <?php foreach ($todoList as $item): ?>
    <li> <?= $item['todo'] ?> </li>
    <?php endforeach ?>
</ul>
</body>
</html>


