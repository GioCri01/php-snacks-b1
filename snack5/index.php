
<?php
$nome = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
$output = "";
var_dump($_GET);

if(strlen($nome) > 3 and is_numeric($age) ){
    $output = "Accesso consentito";
}elseif(strpos($mail , '.') and strpos($mail , '@') ){
    $output = "Accesso consentito";
}else{
    $output = "Accesso negato";
}
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
    <h1><?php echo $output?></h1>
</body>
</html>