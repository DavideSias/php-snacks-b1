<?php
//Snack 1

$arrBasket = [
    [
        [
            'casa' => 'Olimpia Milano',
            'punteggio' => '55',
        ],
        [
            'ospite' => 'Cantù',
            'punteggio' => '60',
        ],
    ],
    [
        [
            'casa' => 'Dinamo Sassari',
            'punteggio' => '80',
        ],
        [
            'ospite' => 'Venezia',
            'punteggio' => '78',
        ],
    ],
    [
        [
            'casa' => 'Bologna',
            'punteggio' => '96',
        ],
        [
            'ospite' => 'Roma',
            'punteggio' => '101',
        ],
    ],
    [
        [
            'casa' => 'Lecce',
            'punteggio' => '63',
        ],
        [
            'ospite' => 'Verona',
            'punteggio' => '65',
        ],
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snacks</title>
</head>
<body>
    <?= '<pre>' . print_r($arrBasket, true) . '</pre>' ?>
    <h1>Snack 1</h1>
    <ul><?php 
            $arrBasketLength = count($arrBasket);
            for ($i = 0; $i < $arrBasketLength; $i++) { ?>
                <li><?= $arrBasket[$i][0]['casa'] . ' - ' . $arrBasket[$i][1]['ospite'] . ' | ' . $arrBasket[$i][0]['punteggio'] . ' - ' . $arrBasket[$i][1]['punteggio']?></li><?php
            }
        ?>
    </ul>
</body>
</html>