<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 


$hoje = date('m-d-Y');

$aOntem = gmdate("m-d-Y", time()-(3600*51));

$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$aOntem'&@dataFinalCotacao='$hoje'&\$top=100&/";

$resultado = json_decode(file_get_contents($url));

var_dump ($resultado);



?>
</body>
</html>


