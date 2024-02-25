<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
    <?php 
    //Capturando os dados do Formulário Retroalimentado
    
    $valor1 = $_GET['v1'] ?? 0;
    
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Qual o valor que deseja sacar? (R$)*</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <p>*Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Verificar">
    </form>
    </main>

    <section id="resultado">
        <h2>Saque de <?php print "$valor1,00" ?> realizado</h2>
        <?php 
         
          $nota100 = intval($valor1 / 100);
          //divisão pra chegar no valor em notas de 100
          $rnota100 = $valor1 % 100;
          //resto da divisão pro dinheiro que sobra
          

          if ($rnota100 > 0) {
            $nota50 = intval($rnota100 / 50);
            //a partir daqui uso o dinheiro que sobra e passo pra nota seguinte
            $rnota50 = $rnota100 % 50;
                if ($rnota50 > 0) {
                    $nota10 = intval($rnota50 / 10);
                    $rnota10 = $rnota50 % 10;
                            if ($rnota10 > 0){
                            $nota5 = intval($rnota10 / 5);
                                                    } else $nota5 = 0;
                } else [$nota10 = 0, $nota5 = 0];
                
                
                
             } else [$nota50 = 0, $nota10 = 0, $nota5 = 0];
             // o else é quando uma nota já serve, e as outras saem zeradas



             
    
          
           print "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>
           <ul>
           <img src='nota100.png' <p>   X $nota100</p>
           <img src='nota50.png' <p>   X $nota50</p>
           <img src='nota10.png' <p>   X $nota10</p>
           <img src='nota5.png' <p>   X $nota5</p>
           </ul>";
           
           
                                   
        ?>
    </section>
</body>
</html>