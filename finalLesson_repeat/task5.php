<?php
/*
Sis array bus naudojamas 5 ir 6 uzduociai :
*/
//$products =
//[
//'products' => [
//'Comfy chair' => 'no data',
//'Yellow lamp' => [
//'price' => 15.3,
//'quantity' => 2,
//],
//'Didzioji sofa' => [
//'pavadinimas' => 'Didzioji sofa',
//'kaina' => 'trylika eurų'
//],
//'Softest rug' => [
//'price' => 27.3,
//'quantity' => 3,
//'discount' => 13,
//],
//'Blue shelf' => [],
//'Other rug' => [
//'price' => 27.3,
//],
//],
//'cartDiscounts' => [5, 16, 15],
//];
/*
5. Atspausdinkite statistika - pavadinima, kokia kaina ir koks likutis.
Pvz:. Pavadinimas - Sofa, Kaina - 15.6, Likutis - 2
Jeigu produkte truksta numatytu parametru, vietoje ju naudokite N/A
    Pvz.:
        - Pavadinimas - Softest rug, Kaina - 27.3, Likutis - 3
        - Pavadinimas - Didzioji sofa, Kaina - N/A, Likutis - N/A
*/
function task5(): void
{
    $products = [
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
            'Other rug' => [
                'price' => 27.3,
            ],
        ],
        'cartDiscounts' => [5, 16, 15],
    ];
//    var_dump($products['products']['Yellow lamp']['price']);
//    echo 'Kaina '.$products['products']['Yellow lamp']['price'];

    foreach ($products as $item) {
        echo 'Kaina '.$item['Yellow lamp']['price'];
    }
//    var_dump($products);
}
task5();

/*
6. Parašykite funkciją kuri priimti prekės pavadinimą ir kokį kiekį norima nusipirkti, jeigu kiekio užtenka mūsų sandelyje (masyve)
tuomet atspausdinama - Jums parduota tokio pavadinimo - PREKES_PAVADINIMAS, prekė, kuri kainuoja - 55.55
Kitu atveju turi buti spausdinama - atsiprasau, bet tokio likucio sandelyje nebeturime.
*/

