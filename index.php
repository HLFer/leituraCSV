<?php


$arquivo = fopen('products.csv', 'r');

$row = 0;

echo '<pre>';

while($line = fgetcsv($arquivo, 100000, ',')){
    if($row++ == 0){
        continue;
    }
    $produtos[] = [
        'sku' => $line[0],
        'store' => $line[1],
        'atribute_set' => $line[2],
        'type' => $line[3]
    ];

}

print_r($produtos);
