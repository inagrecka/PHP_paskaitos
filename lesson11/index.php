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
    <style>
        table {
            width: 50%;
        }
        tr, th, td {
            text-align: center;
        }
    </style>
</head>
<body>
<form method="POST" action="submit.php">
    <label for="todoInput"> New TODO list </label>
    <br>
    <input type="text" id="todoInput" name="todo" placeholder="ToDo">
    <input type="date" name="new_date">
    <input type="time" name="new_time">
    <input type="submit">
</form>

<h1> ToDo list: </h1>
<?php foreach ($todoList as $todoItem) : ?>
    <table>
        <tr>
            <th>Job</th>
            <th>Created at</th>
            <th>Due date</th>
        </tr>
        <tr>
            <td><?= $todoItem['task'] ?></td>
            <td><?= $todoItem['created_at'] ?></td>
            <td><?= $todoItem['due_date'] ?></td>
        </tr>
    </table>
<?php endforeach ?>
</body>
</html>


