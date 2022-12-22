<?php

declare(strict_types=1);

$someProducts = [
    '000_product_1  ',
    ' 000_product_2',
    '000_product_3  ',
    '000_product_4',
    '  000_product_5 ',
    '000_product_20
    ',
];

//function exercise1(array $products)
//{
//    /*
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
//    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
//    Naudokite $someProducts masyvą.
//    */
//    $sum = 0;
//
//    foreach ($products as $product) {
//        $trimProduct = trim($product);
//        $stringLength = strlen($trimProduct);
//        $sum += $stringLength;
//    }
//    return $sum;
//}
//var_dump(exercise1($someProducts));

//function exercise2(): array
//{
//    /*
//    Išskaidykite $longLine kintamajį į atskirus žodžius. Žodžiai turi grįžti iš funkcijos masyvo formoje.
//    Skaidykite per underscore (_)
//    */
//    $longLine = 'Hello_how_are_you_doing?';
//    $newArr = explode('_', $longLine);
//
//    return $newArr;
//}
//var_dump(exercise2());

//function exercise3(): array
//{
//    /*
//    Grąžinkite masyvą, kuris talpintų tik tuos žodžius, kurie panašūs į emailų adresus
//    t.y. turi savyje simbolį @
//    */
//    $emails = [
//        'some@email.com',
//        'someAemail.com',
//        'another@gmail.com',
//        'notAreal.email.com',
//        'real@gmail.com',
//    ];
//    $newEmail = [];
//    foreach ($emails as $email) {
//        if (str_contains($email, '@')) {
//            $newEmail[] =  $email;
//        }
//    }
//    return $newEmail;
//}
//var_dump(exercise3());

//function exercise4(array $products): int
//{
//    /*
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą.
//    Naudokite $someProducts masyvą
//    */
//    $sum = 0;
//
//    foreach ($products as $item) {
//        $stringLength = strlen($item);
//        $sum += $stringLength;
//    }
//
//    return $sum;
//}
//var_dump(exercise4($someProducts));

function exercise5(): array
{
    /*
    Kiekvienam žodžiui apskaičiuokite balsių skaičių (a, e, i, o, u)
    Funkcijos kvietimas: exercise5()
    Funkcija grąžina: [2, 3, 3, 1, 2]
    */

    $words = [
        'tennis',
        'rooftops',
        'hillside',
        'warm',
        'friends',
    ];
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $arr = [];
    foreach ($words as $word) {
        $sum = 0;
        for ($i = 0; $i < strlen($word); $i++) {
            for ($x = 0; $x < count($vowels); $x++) {
                if ($word[$i] == $vowels[$x]) {
                    $sum++;
                }
            }
        }
        $arr[] = $sum;
    }
    return $arr;
}
var_dump(exercise5());

//function exercise6(array $products): int
//{
//    /*
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
//    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
//    Naudokite $someProducts masyvą.
//    */
//    $sum = 0;
//
//    foreach ($products as $product) {
//        $trimProduct = trim($product);
//        $stringLength = strlen($trimProduct);
//        $sum += $stringLength;
//    }
//    return $sum;
//}
//var_dump(exercise6($someProducts));

//function exercise7(): int
//{
//    $text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
//    The concept emphasises the significance of our community and shared humanity and teaches
//    us that "A person is a person through others". Many view the philosphy as a counterweight
//    to the culture of individualism in our contemporary world.';
//
//    /*
//    Suskaičiuokite kiek balsių yra tekste
//    */
//    $sum = 0;
//    $arr = ['a', 'e', 'i', 'o', 'u'];
//    for ($i = 0; $i <strlen($text); $i++) {
//        for ($x = 0; $x < count($arr); $x++) {
//            if ($text[$i] == $arr[$x]) {
//                $sum++;
//            }
//        }
//    }
//    return $sum;
//}
//var_dump(exercise7());
