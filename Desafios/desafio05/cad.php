<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Cotação</h1>
</header>
<main>
    <?php 

$hoje = date('m-d-Y');

$aOntem = gmdate("m-d-Y", time()-(3600*51));
//o gm date serve pra subtrair o valor em time()-(segundos, 3600 equivale a uma hora)
//multiplicação pela quantidade de tempo que quer a menos e aumenta 3 horas devido ao gmt-3

$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$aOntem'&@dataFinalCotacao='$hoje'&\$top=100&/";

$resultado = json_decode(file_get_contents($url));
//uso de json para pegar os dados da api

$dolar = ($resultado->value[0]->cotacaoVenda);
//usei cotação por periodo devido a final de semana não ter cotação, peguei o primeiro array de value para a cotação de venda 

       $reais= $_GET["reais"] ?? "inválido";
       $result= round(($reais/$dolar),2); 

       echo "<p>O valor R$$reais equivale a U$$$result</p>"

    ?>

    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
</body>
</html>
