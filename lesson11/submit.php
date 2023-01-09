<?php
$oldTodo = file_get_contents('new.json');
//var_dump($oldTodo);
$deserializedOldTodo = json_decode($oldTodo, true);
//var_dump($deserializedOldTodo);

$deserializedOldTodo[] = $_POST['todo'];
/*jeigu input'ui priskirsim kintamaji, tada i masyva idesime kintamaji (be POST)
 $new = $_POST['todo'];
 $deserializedOldTodo[] = $new; */

$serializedOldTodo = json_encode($deserializedOldTodo, JSON_PRETTY_PRINT);
$newTodo = file_put_contents('new.json', $serializedOldTodo);
?>

<h3>Task submitted: <?= $_POST['todo'] ?></h3>
<button onclick="history.go(-1)"> BACK </button>
<a href="/">GO BACK</a> <!-- kitas variantas mygtuko "ATGAL" -->

<!--
DARBO EIGA:
1. sukuriam naują JSON failą;
2. paimam duomenis iš JSON failo;
3. juos konvertuojam į MASYVĄ;
4. atliekame reikalingus veiksmus su esamu MASYVU;
5. naują MASYVĄ konvertuojam į JSON failą;
6. MASYVO duomenis įdedame į JSON failą.
-->


