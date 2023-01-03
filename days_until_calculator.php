<?php

/*
    Užduotis: 4
    Sukurkite naują failą days_until_calculator.php.
    Jį paleidus iš vartotojo turėtų nuskaityti 2 argumentus, vieną po kito:
    php -f days_until_calculator.php
    Event name:
    Event date (YYYY-MM-DD):
    Pavyzdys:
    php -f days_until_calculator.php
    Event name: birthday
    Event date (YYYY-MM-DD): 2022-06-15
    Event 'birthday' is 97 days away
*/

$name = readline('Event name: ');
$date = readline('Event date (YYYY-MM-DD): ');
$dateNow = new DateTime();
$dateInput = new DateTime($date);
$interval = $dateNow->diff($dateInput);
echo 'Event '. '"'. $name. '"'. ' is '.($interval->days). ' days away.';