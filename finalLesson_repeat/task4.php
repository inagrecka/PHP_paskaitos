<?php
/*
4.   Išveskite žodžių statistiką.
Funkcija kviečiama:
exercise2(['hello', 'you'])
Funkcijos outputas:
[
'hello' => [
'vowels' => 2,
'consonants' => 3,
'length' => 5,
'starts_with' => h,
'ends_with' => o,
],
'you' => [
'vowels' => 3,
'consonants' => 0,
'length' => 3,
'starts_with' => y,
'ends_with' => u,
]
]
*/

function task4(array $arr) {
    $vowels = 0;
    $consonants = 0;
    $length = 0;
    $startsWith = '';
    $endsWith = '';
    foreach ($arr as $item) {
        $length = strlen($item);

        $arr[] = [
            'vowels' => $vowels,
            'consonants' => $consonants,
            'length' => $length,
            'starts_with' => $startsWith,
            'ends_with' => $endsWith,
        ];
//        for ($i = 0; $i < strlen($item); $i++) {
//            if ($item[$i] == 'a' || $item[$i] == 'e' || $item[$i] == 'i' || $item[$i] == 'o' || $item[$i] == 'u') {
//                echo $vowels;
//            }
//        }
    }
    return $arr;

}
var_dump(task4(['hello', 'you']));

/*
Sis array bus naudojamas 5 ir 6 uzduociai :

[
'products' => [
'Comfy chair' => 'no data',
'Yellow lamp' => [
'price' => 15.3,
'quantity' => 2,
],
'Didzioji sofa' => [
'pavadinimas' => 'Didzioji sofa',
'kaina' => 'trylika eurų'
],
'Softest rug' => [
'price' => 27.3,
'quantity' => 3,
'discount' => 13,
],
'Blue shelf' => [],
],
'cartDiscounts' => [5, 16, 15],
];


5. Atspausdinkite statistika - pavadinima, kokia kaina ir koks likutis.
Pvz:. Pavadinimas - Sofa, Kaina - 15.6, Likutis - 2

6. Parašykite funkciją kuri priimti prekės pavadinimą ir kokį kiekį norima nusipirkti, jeigu kiekio užtenka mūsų sandelyje (masyve)
tuomet atspausdinama - Jums parduota tokio pavadinimo - PREKES_PAVADINIMAS, prekė, kuri kainuoja - 55.55
Kitu atveju turi buti spausdinama - atsiprasau, bet tokio likucio sandelyje nebeturime.
*/

