<?php
$oldTodo = file_get_contents('new.json');
$deserializedOldTodo = json_decode($oldTodo, true);
$date = date('Y-m-d H:i:s');
$newDate = new DateTime($_POST['new_date']);
$dueDate = $newDate -> format('Y-m-d');
$newTime = new DateTime($_POST['new_time']);
$dueTime = $newTime -> format('H:i:s');

$deserializedOldTodo[] = [
        'task' => $_POST['todo'],
        'created_at' => $date,
        'due_date' => $dueDate.' '.$dueTime,
];

$serializedOldTodo = json_encode($deserializedOldTodo, JSON_PRETTY_PRINT);
$newTodo = file_put_contents('new.json', $serializedOldTodo);

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
    <h3>Task submitted: <?= $_POST['todo'] ?></h3>
    <button onclick="history.go(-1)"> BACK </button>
    <a href="/">GO BACK</a> <!-- kitas variantas mygtuko "ATGAL" -->
</body>
</html>

<!--
DARBO EIGA:
1. sukuriam naują JSON failą;
2. paimam duomenis iš JSON failo;
3. juos konvertuojam į MASYVĄ;
4. atliekame reikalingus veiksmus su esamu MASYVU;
5. naują MASYVĄ konvertuojam į JSON failą;
6. MASYVO duomenis įdedame į JSON failą.
-->


