<?php

declare(strict_types=1);

/*
1. Išspausdinkite šio momento datą pasinaudodami funkcija 'date'
*/
//function exercise1(): void
//{
//var_dump(date('Y-m-d H:i:s'));
//}
//exercise1();

/*
2. Išspausdinkite datą '2008-12-15 15:15' pasinaudodami funkcija 'date'
*/
//function exercise2(): void
//{
//var_dump(date('Y-m-d H:i:s', 1229346900));
//}
//exercise2();

/*
3. Išspausdinkite šio momento datą skirtingais formatais, kurie atitiktų pavyzdžius:
- 1970 Mar 1 15:15:00
- 1970 Mar 01 15:15
- 1970 Mar 1st 11:15:00 PM
- 1970/3/1
- savaites numeris (52 savaitės metuose)
- dienos numeris (365 dienos metuose)
*/
//function exercise3(): void
//{
//var_dump(date('Y M j H:i:s', 5148900));
//var_dump(date('Y M d H:i', 5148900));
//var_dump(date('Y M jS h:i:s A', 5177700));
//var_dump(date('Y/n/j', 5148900));
//var_dump(date('W'));
//var_dump(date('z'));
//}
//exercise3();

/*
4. Sukurkite datos objektą iš šių tekstinių datų:
- 2000-03-02 15:30:00
- 2000/02/15 08:30:00 PM
- 2000 March 2nd 15:30:00
*/
//function exercise4(): void
//{
//$date = new DateTime('2000-03-02 15:30:00');
//var_dump($date);
//
//$date = new DateTime('2000/02/15 8:30:00 PM');
//var_dump($date ->format('Y/m/d h:i:s A'));
//
//$date = new DateTime('2000-03-02 15:30:00');
//var_dump($date ->format('Y M jS H:i:s'));
//}
//exercise4();

/*
5. Sukurkite datą iš '15th Jan 2021 8:15:01 PM' (data X). Pamodifikuokite, kad gautumėte:
- datą po 2 savaičių nuo datos X
- datą po 10 metų nuo datos X
- datą prieš 5 valandas nuo datos X
- paskutinę mėnesio dieną
- pirmą mėnesio dieną
- ateinantį antradienį
- datą prieš 1 dieną 8 valandas 15 minučių nuo datos X
*/

function exercise5(): void
{
$date = new DateTime('2021-01-15 8:15:01 PM');
//$date->format('jS M Y h:i:s A');
//var_dump($date->modify('-2weeks'));
//var_dump($date->modify('+10years'));
//var_dump($date->modify('-5hours'));
//var_dump($date->modify('last day of this month'));
//var_dump($date->modify('first day of this month'));
//var_dump($date->modify('Tuesday next week'));
//var_dump($date->modify('-1day, -8hours, -15minutes'));

}
exercise5();

function exercise6(): void
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2021 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 02 15:00:12',
        ],
    ];

    /*
    Išspausdinkite produktų paskutinių pirkimų santrauką:
    Wine glass 2021-01-15 18:34:12
    ...
    */
//    foreach ($products as $item) {
//        $name = $item['name'];
//        $lastPurchase = $item['last_purchase'];
//
//        $lastPurchaseFormatted = date_create_from_format('Y M d H:i:s', $lastPurchase);
//
////        echo $name. ' '. date_format($lastPurchaseFormatted, 'Y-m-d H:i:s').PHP_EOL; - variantas 1
//        echo $name. ' '. $lastPurchaseFormatted->format('Y-m-d H:i:s').PHP_EOL; /* variantas 2 */
//    }
}
exercise6();

function exercise7($date1, $date2): string
{
    /*
    Palyginkite datas ir grąžinkite atsakymą, kuri data naujesnė.
    Funkcijos kvietimas: exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25'));
    Rezultatas:
    'First date is newer'
    Funkcijos kvietimas: exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25'));
    Rezultatas:
    'Second date is newer'
    */

//    if ($date1 > $date2) {
//        echo 'First date is newer';
//    } else {
//        echo 'Second date is newer';
//    }
//
    return '';
}
exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25'));

function exercise8(DateTime $date): void /* butinai irasyti klase "DateTime" jeigu dirbame su DIFF!!! */
{
    /*
    Išspausdinkite paduotos datos skirtumą nuo dabartinio momento žodžiais.
    Funkcijos kvietimas: exercise8(date_create('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 891 days ago
    Funkcijos kvietimas: exercise8(date_create('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
    $currentDate = new DateTime(); /* esama data šiam momentui */

    if ($date < $currentDate) {
        $interval = $date->diff($currentDate);
        echo 'Supplied date was '. ($interval->days). ' days ago';
    } else {
        echo 'Supplied date is in the future';
    }
}
exercise8(date_create('2023-01-25 17:13:25'));

function exercise9($date): void
{
    /*
    Išspausdinkite datų skirtumą žodžiais.
    Funkcijos kvietimas: exercise9(date_create('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 2 years 1 months 11 days
    Funkcijos kvietimas: exercise9(date_create('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
}