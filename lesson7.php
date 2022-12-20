<?php

declare(strict_types=1);

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}

function exercise1($cities): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
    Miestus pasiimkite iškvietę funkciją 'getCities'
    */

    $sum = 0;
    foreach ($cities as $city) {
        $sum += $city['population'];
    }
    return $sum;

}
var_dump(exercise1(getCities()));

function exercise2($cities): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
    ir grąžinkite ją iš funkcijos
    */

    return array_sum(array_column($cities, 'population'));

}
var_dump(exercise2(getCities()));
function exercise3($cities): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
    */
    return array_reduce(
        $cities,
        function (int $sum, array $city) {
            $sum += $city['population'];
            return $sum;
        },
        0
    );
}
var_dump(exercise3(getCities()));

function exercise4($cities): int
{
    /*
    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
    Rinkites sau patogiausią skaičiavimo būdą.
    */

    $bigCities =  array_filter(
        $cities,
        function (array $city) {
            if ($city['population'] > 25000000) {
                return true;
            }
        },
    );
    $sum = 0;
    foreach ($bigCities as $cities) {
        $sum += $cities['population'];
    }
    return $sum;
}
var_dump(exercise4(getCities()));

function exercise5($cities): array
{
    /*
    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
    [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        ...
    ]
    */
    return array_filter(
        $cities,
        function (array $city) {
            if ($city['population'] > 25_000_000) { //ilgus skacius galima rasyti atskiriant su zenklu "_"
                return true;
            }
        },
    );
}
var_dump(exercise5(getCities()));
function exercise6(): int
{

    /*
    Suskaičiuokite ir grąžinkite bendrą užsakymo sumą.
    Prekėms, kurių pavadinimai nurodyti masyve $lowPriceItems, taikykite kainą 'priceLow'.
    Kitoms prekėms taikykite kainą 'priceRegular'.
    Bandykite panaudoti array_* funkcijas.
    */

    $lowPriceItems = ['t-shirt', 'shoes'];

    $orderItems = [
        [
            'name' => 't-shirt',
            'priceRegular' => 15,
            'priceLow' => 13,
            'quantity' => 3,
        ],
        [
            'name' => 'coat',
            'priceRegular' => 74,
            'priceLow' => 60,
            'quantity' => 6,
        ],
        [
            'name' => 'shirt',
            'priceRegular' => 25,
            'priceLow' => 20,
            'quantity' => 2,
        ],
        [
            'name' => 'shoes',
            'priceRegular' => 115,
            'priceLow' => 100,
            'quantity' => 1,
        ],
    ];

    $price = array_reduce(
        $orderItems,
        function (int $carry, array $priceT) {
            if (($priceT['name'] !== 't-shirt') && ($priceT['name'] !== 'shoes')) {
                $carry += $priceT['priceRegular'] * $priceT['quantity'];
                return $carry;
            } else {
                $carry += $priceT['priceLow'] * $priceT['quantity'];
                return $carry;
            }
        },0
        );
    return $price;

}
var_dump(exercise6());