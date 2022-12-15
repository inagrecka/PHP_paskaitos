<?php

//$masyvas = ['Ina', 'Giedrius', 'Ausra'];
//
//$masyvas1 = []; //-tuscias masyvas
//
//var_dump($masyvas);
//
//echo $masyvas[2];
//
////masyvu pridejimas
//$masyvas2 = [];
//$masyvas2[] = 25;
//$masyvas2['num_1'] = 102;
//var_dump($masyvas2);

//UZDAVINIAI
function exercise1(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [0, 1, 2, 3, 4];

    return $numbers[3];
}
var_dump(exercise1());


function exercise2(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    return $numbers['three'];
}
var_dump(exercise2());

function exercise3(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        [0, 1],
        [1, 0, 2],
        [0,
            [0, 1, 99],
        ],
    ];

    return $numbers[2][1][2];
}
var_dump(exercise3());

function exercise4(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_2' => [
                'zero' => 0, 'one' => 1, 'ninetynine' => 99
            ],
        ],
    ];

    var_dump($numbers['fourth']['value_2']['ninetynine']);
    return 0;
}
exercise4();


function exercise5(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                'zero' => 0, 'one' => 1, 99
            ],
        ],
    ];
    var_dump($numbers['fourth']['value_6'][0]);
    return 0;
}
exercise5();

function exercise6(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                5 => 0, 'one' => 1, 99
            ],
        ],
    ];
    var_dump($numbers['fourth']['value_6'][6]);
    return 0;
}
exercise6();

function exercise7(): array
{
    /*
    Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    unset($numbers['two']);
    var_dump($numbers);
    return [];
}
exercise7();

function exercise8(): array
{
    /*
    Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]
    */

    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
    foreach ($numbers as $key => $i) {
        if ($i % 2 == 0) {
            unset($numbers[$key]);
        }
    }
    return $numbers;
}
var_dump(exercise8());

function exercise9(int $start, int $end): void
{
    /*
    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
    */
    for ($i = $start; $i >= $end; $i--) {
        echo $i.PHP_EOL;
        if ($start < $end) {
            echo "";
        }
    }
}
exercise9(15, 10);

function exercise10(int $number): void
{
    /*
    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
    funkcija nieko nespausdina.
    Funkcijos kvietimas: exercise10(60)
    Funkcija spausdina:
    3
    6
    9
    12
    ...
    60
    */

    for ($i = 1; $i <= $number; $i++) {
        if ($i % 3 == 0) {
            echo $i.PHP_EOL;
        } elseif ($i < 0) {
            echo "";
        }
    }
}
exercise10(60);

function exercise11(int $number): void
{
    /*
    Išspausdinkite skaičius nuo $number iki 0 pasinaudodami ciklu. Jeigu paduotas skaičius neigiamas,
    funkcija nieko nespausdina.
    Funkcijos kvietimas: exercise11(21)
    Funkcija spausdina:
    21
    20
    19
    ...
    1
    0
    */
    for ($i = $number; $i > 0; $i--) {
        echo $i.PHP_EOL;
        if ($number < 0) {
            echo "";
        }
    }
}
exercise11(21);

function getNumbers(): array
{
    return [
        99,
        15,
        28,
        13,
        145,
        99,
        12,
        -57,
        -36,
    ];
    }
//var_dump(getNumbers());
/*
Kiekviena užduoties dalis turi būti funkcija. Tęskite funkcijų numeraciją: exercise12, exercise13 ir t.t.
Masyvą gausite iškvietę funkciją 'getNumbers'

12. Raskite ir grąžinkite visų masyvo narių sumą */
function exercise12(array $arr): int {
    $sum = 0;
    foreach($arr as $num) {
        $sum += $num;
    }
    return $sum;
}
var_dump(exercise12(getNumbers()));

//13. Raskite ir grąžinkite lyginių masyvo narių sumą
function exercise13(array $arr): int {
    $sum = 0;
    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $sum += $num;
        }
    }
    return $sum;
}
var_dump(exercise13(getNumbers()));

//14. Raskite ir grąžinkite teigiamų masyvo narių sumą
function exercise14(array $arr): int {
    $sum = 0;
    foreach ($arr as $num) {
        if ($num > 0) {
            $sum += $num;
        }
    }
    return $sum;
}
var_dump(exercise14(getNumbers()));

//15. Raskite ir grąžinkite sandaugą tų masyvo narių, kurie dalijasi iš 5
function exercise15(array $arr): int {
    $sandauga = 1;
    foreach ($arr as $num) {
        if ($num % 5 === 0) {
            $sandauga *= $num;
        }
    }
    return $sandauga;
}
var_dump(exercise15(getNumbers()));

//16. Raskite ir grąžinkite masyvo narių vidurkį. Neigiamus skaičius paverskite į teigiamus
function exercise16(array $arr):int {
    $average = 0;
    $sum = 0;
    foreach ($arr as $num) {
        $num = abs($num);
        $sum += $num;
        $average = $sum / count($arr);
    }
    return $average;
}
var_dump(exercise16(getNumbers()));

//17. Į masyvą pridėkite naują narį - skaičiu 255 - ir išspausdinkite masyva pasinaudodami funkcija 'printr'
