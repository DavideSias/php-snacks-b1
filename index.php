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

//Snack 2

// if(isset($_GET['mail'], $_GET['name'], $_GET['age'] )){
//     $mail = $_GET['mail'];
//     $name = $_GET['name'];
//     $age = $_GET['age'];

//     if((strpos($mail, '@') !== FALSE) && (strpos($mail, '.' !== FALSE))){

//         if(strlen($name) < 2) {
//             $message = 'Il nome deve essere più lungo di 3 caratteri';
//         } else {
//             $message = 'Accesso Eseguito';
//         };

//     } else {
//         $message = "La mail deve contenere '@' e '.'";
//     };

// } else {
//     $mail = '';
//     $name = '';
//     $message = 'Inserire tutti i dati richiesti';
// }
   
//Snack 4

$numArray = [];
$i = 0;

while ($i < 15) {
    $randomNumber = rand(0 , 100);

    if(!in_array($randomNumber, $numArray)) {
        $numArray[] = $randomNumber;
        $i++;
    }
} 


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
    <!-- <?= '<pre>' . print_r($arrBasket, true) . '</pre>' ?> -->
    <h1>Snack 1</h1>
    <ul><?php 
            $arrBasketLength = count($arrBasket);
            for ($i = 0; $i < $arrBasketLength; $i++) { ?>
                <li><?= $arrBasket[$i][0]['casa'] . ' - ' . $arrBasket[$i][1]['ospite'] . ' | ' . $arrBasket[$i][0]['punteggio'] . ' - ' . $arrBasket[$i][1]['punteggio']?></li><?php
            }
        ?>
    </ul>

    <!-- <h1>Snack 2</h1>
    <form action="" method="get">
        <label for="mail">Mail: </label>
        <input type="text" name="mail" id="mail">
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name">
        <label for="age">Età: </label>
        <input type="number" name="age" id="age">
        <button>Check info</button>
    </form>

    <h2><?= $message ?></h2> -->

    <h1>Snack 4</h1>

    <!-- <?= '<pre>' . print_r($numArray, true) . '</pre>' ?>  -->
    <ul><?php 
            $numArrayLength = count($numArray);
            for ($i = 0; $i < $numArrayLength; $i++) { ?>
                <li><?= $numArray[$i]?></li><?php
            }
        ?>
    </ul>
</body>
</html>