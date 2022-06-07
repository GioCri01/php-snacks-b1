<!--
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60


-->

<?php
$ArrPartite = [
    [
        "SquadraCasa" => "Olimpia Milano",
        "Squadraospite" => "Cantù",
        "PuntiCasa" => 75,
        "PuntiOspite" => 65
    ],
    [
        "SquadraCasa" => "Torino",
        "Squadraospite" => "Bergamo",
        "PuntiCasa" => 80,
        "PuntiOspite" => 65
    ],
    [
        "SquadraCasa" => "Virtus Bologna",
        "Squadraospite" => "Reggiana",
        "PuntiCasa" => 90,
        "PuntiOspite" => 95
    ],
    [
        "SquadraCasa" => "Caserta",
        "Squadraospite" => "Roma",
        "PuntiCasa" => 80,
        "PuntiOspite" => 65
    ],
    [
        "SquadraCasa" => "Mestre",
        "Squadraospite" => "Otranto",
        "PuntiCasa" => 80,
        "PuntiOspite" => 15
    ],
    [
        "SquadraCasa" => "Virtus Casapesenna",
        "Squadraospite" => "Caivano",
        "PuntiCasa" => 30,
        "PuntiOspite" => 65
    ],
];





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($ArrPartite) ; $i++):?> 
            <li> <?php echo $ArrPartite[$i]['SquadraCasa']?> - <?php echo $ArrPartite[$i]['Squadraospite']?> || <?php echo $ArrPartite[$i]['PuntiCasa']?> - <?php echo $ArrPartite[$i]['PuntiOspite']?></li>
        <?php endfor ?>
    </ul>
</body>
</html>