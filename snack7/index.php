<!--
    Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php
$arrAlunni = [
    [
        "nome" => "Mario",
        "Cognome" => "Rossi",
        "Voto Materie" => [
            "matematica" => 6,
            "italiano" => 5,
            "Francese" => 4
        ]
    ],
    [
        "nome" => "Francesco",
        "Cognome" => "Bianchi",
        "Voto Materie" => [
            "matematica" => 8,
            "italiano" => 3,
            "Francese" => 7
        ]
    ]
        ];

var_dump($arrAlunni);

$prova = array_sum($arrAlunni[$i]['Voto Materie']);
var_dump($prova)
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
        <?php for ($i=0; $i < count($arrAlunni) ; $i++): ?>
            <ul>
                <li><h2><?php echo $arrAlunni[$i]['nome']?> <?php echo $arrAlunni[$i]['Cognome']?> </h2></li>
                <li><h3>Voti Materie</h3></li>
                <li>matematica <?php echo $arrAlunni[$i]['Voto Materie']['matematica']?></li>
                <li>italiano <?php echo $arrAlunni[$i]['Voto Materie']['italiano']?></li>
                <li>Francese <?php echo $arrAlunni[$i]['Voto Materie']['Francese']?></li>
                <li> <h3>Media Voti</h3></li>
                <?php $media = array_sum($arrAlunni[$i]['Voto Materie'])/ count($arrAlunni[$i]['Voto Materie']); ?>
                <li><?php echo $media?></li>
            </ul>
        <?php endfor?>
        
            
        

</body>
</html>

