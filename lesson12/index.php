<?php

declare(strict_types=1);

/*
1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
"A car is standing in a parkinglot." --> "A car is standing in a"
*/
//function task1(string $input):string {
//    $pattern = '/\s\w+\./'; //tarpas + bet koks zodis + taskas
//    $change = '';
//    $newText = preg_replace($pattern, $change, $input);
//    return $newText;
//}
//var_dump(task1('A car is standing in a parkinglot.'));
/*
2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
"+37062345678" - true
"+37012345678" - false
"+3706234567" - false
"+3706234567a" - false
*/

//function task2(string $number):bool {
//    $pattern = '/^\+(3706)\d{7}$/';
//    $result = preg_match($pattern, $number);
//    if ($result !== 0) {
//        return true;
//    } else {
//        return false;
//    }
//}
//var_dump(task2('4454tgsegsd'));
/*
3. Patobulinkite funkciją (2). Funkcija turėtų galėti patikrinti ir tokius telefono numerius:
"+370 623 45678"
"+370-623-45678"
"+370-623 45678"
"00370 623 45678"
Jeigu telefono numeris validus, iš funkcijos turėtų grįžti tvarkingai suformatuotas telefono numeris:
"+370-623 45678" --> "+37062345678"
*/

function task3(string $number):string {
    $pattern = '/^(\+|0{2})(370)( |\-)(6)(\d{2})( |\-)(\d{5})$/';
    $replacement = '+$2$4$5$7'; //pazymime tik regex'o grupes, kurias norime isspausdinti (naudojame dolerio $ zenkla)
    $result = preg_match($pattern, $number);
    if ($result !== 0) {
        return preg_replace($pattern, $replacement, $number);
    } else {
        return 'Number not valid';
    }
}
var_dump(task3('00370 623 45678'));

/*
4. Parašykite funkciją, kuri užmaskuotų dalį vartotojo duomenų. Pavardės ir gimimo metų simboliai
turėtų būti pakeisti i simbolius 'X'.
"John Smith, 1979 05 15" --> "John XXXXX, XXXX 05 15"
*/

/*
5. Parašykite funkciją, kuri pravaliduotų IPv4 adresą. IPv4 adresas yra sudarytas iš 4 skaičių, kurių kiekvienas gali
būti nuo 0 iki 255. Skaičiai atskirti taškais.
Pvz.:
255.255.255.255
1.1.0.1
*/