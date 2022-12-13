<?php
// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/
//function dividesBy5(int $number): int {
//   return $number % 5;
//}
//var_dump(dividesBy5(12));

/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.
Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/
//$arr = ["some text", "another text"];
//function arrayPrinter(array $array):void {
//    var_dump($array);
//}
//arrayPrinter($arr);

/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.
Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'
Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/

//function stringEnhancer(string $text, string $text2="**"):string {
//    return $text2.$text.$text2;
//}
//echo (stringEnhancer("some text", "##")).PHP_EOL;
//echo (stringEnhancer("some text"));

/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.
Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'
Funkcija grąžina: funkcija nieko negrąžina
*/
//
//$text = "some text";
//function stringModifier(&$x, $exm):void { // panaudojam "&" reiskia galim tiesiogiai pamodefikuoti kintamaji
//    $x = $exm.$x.$exm;
//}
//stringModifier($text, "##");
//echo $text;

//arba geresnis variantas sitas
$text = "some text";
function stringModifier($x, $exm):string {
    return $exm.$x.$exm;
}
$x = stringModifier($text, "##");
echo $x;

/*
5. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.
Funkcijos kvietimas:
textReplicator('some_text', 3);
Funkcija grąžina: 'some_text-some_text-some_text'
Funkcijos kvietimas:
textReplicator('some_text', null);
Funkcija grąžina: 'some_text'
*/

//function textReplicator(string $text, int $num) {
//    for ($i=0; $i < $num; $i++) {
//        return $text;
//    }
//}
//echo textReplicator("some_text", 3);

/*
6. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
*/