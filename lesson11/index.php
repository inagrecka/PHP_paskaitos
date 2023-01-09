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

<h1> ToDo list: </h1>
<ul>
    <?php foreach ($todoList as $todoItem) : ?>
        <li><?= $todoItem['task'] ?></li> <!-- '=' sutrumpinimas ECHO -->
    <?php endforeach ?>

<!--    APAČIOJE KITAS VARIANTAS (geresnis) -->
    <!--    --><?php
    //    foreach ($todoList as $item) {
    //        echo '<li>' . $item['task'] . '</li>';
    //    }
    //    ?>
</ul>
</body>
</html>


