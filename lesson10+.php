<?php

/*
Exercise 1

Parašykite PHP scriptą, kuris leistų modifikuoti tr. priemonių "duomenų bazę" (vehicles_database.json).
Galite naudoti tą patį failą, su kuriuo dirbote užduotyse 5-7.
Operacijos, kurias mes norime atlikti su duomenimis:
- pridėti tr. priemonę į DB
- išspausdinti visas transporto priemones esančias duomenų bazėje (DB)
- išspausdinti vieną tr. priemonę, esančią DB, pagal jos ID
- ištrinti vieną tr. priemonę, esančią DB, pagal jos ID

CRUD - Create, Read, Update, Delete

######################################################################################

1.1 Sukurkite priemonės pridėjimo funkcionalumą.
Žingsniai:
- paimti is failo duomenis
- juos decodinti
- tuomet pridėti savo suvestą tr. priemonę
- vėl encodinti ir išsaugoti faile
php -f vehicles.php add

Add new vehicle
Vehicle name: Audi 80
Vehicle type: passenger car
Vehicle weight: 1290

Vehicle saved!
*/
$data = file_get_contents('vehicles_database.json'); //paimam duomenis is JSON failo
$deserializedData = json_decode($data, true); // konvertuojam paimtus duomenis i MASYVA

echo 'Add new vehicle'.PHP_EOL;
$nameInput = readline('Vehicles name: ');
$typeInput = readline('Vehicle type: ');
$weightInput = readline('Vehicle weight: ');

//foreach ($deserializedData as $key=>$item) {
//    for ($i = 0; $i < count($deserializedData); $i++) {
//        $deserializedData[$i]['type'] = $typeInput;
//        $deserializedData[$i]['name'] = $nameInput;
//        $deserializedData[$i]['weight'] = (int)$weightInput;
//    }
//}
//
$deserializedData[0][] += ['type' => $typeInput, 'name' => $nameInput, 'weight' => (int)$weightInput];
//$deserializedData[0][]['name'] = $nameInput;
//$deserializedData[0][]['weight'] = (int)$weightInput;

$serializedData = json_encode($deserializedData, JSON_PRETTY_PRINT); //konvertuojam ARRAY i JSON'a
file_put_contents('vehicles_database.json', $serializedData); // idedam duomenis i JSON faila
var_dump($deserializedData);



/* ######################################################################################
s
1.2 Sukurkite visų tr. priemonių išvedimą.
php -f vehicles.php list

Vehicle list:
--------
id: 1
type: passenger car
name: Honda Civic
weight: 1550
--------
id: 2
type: airplane
name: Boeing 737
weight: 41410
--------
....

######################################################################################

1.3 Sukurkite vienos tr. priemonės išvedimą.
ID - yra masyvo nario raktas
Pvz: čia ID yra 0
Array
(
[0] => Array
(
[type] => passenger car
[name] => Honda Civic
[weight] => 1550
)
)

php -f vehicles.php show_one

Please enter ID of the vehicle:

#################

Pavyzdys #1:
php -f vehicles.php show_one

Please enter ID of the vehicle: 1

id: 1
type: passenger car
name: Honda Civic
weight: 1550

#################

Pavyzdys #2:
php -f vehicles.php show_one

Please enter ID of the vehicle: 999

Vehicle 999 does not exist!

######################################################################################

1.4 Sukurkite vienos tr. priemonės ištrynimą.
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete:

#################

Pavyzdys #1:
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete: 1

Vehicle 1 deleted!

#################

Pavyzdys #2:
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete: 999

Vehicle 999 does not exist!

*/