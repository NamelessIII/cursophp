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
        <h1>Verificar tempo total</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Qual o total de segundos</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <input type="submit" value="Verificar">
    </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
         
          $semanas = intval($valor1 / 604800);
          //divisão pra chegar no valor em semanas
          $rsemanas = $valor1 % 604800;
          //resto da divisão pros segundos que sobram
          

          if ($rsemanas > 0) {
            $dias = intval($rsemanas / 86400);
            //a partir daqui uso os segundos que sobram e passo pro tempo seguinte
            $rdias = $rsemanas % 86400;
                if ($rdias > 0) {
                    $horas = intval($rdias / 3600);
                    $rhoras = $rdias % 3600;
                        if ($rhoras > 0) {
                            $minutos = intval($rhoras / 60);
                            $rminutos = $rhoras % 60;
                                if ($rminutos > 0) {
                                    $segundos = $rminutos % 60;
                                    //o resto da divisão dos minutos equivale aos segundos
                                }
                                
                        } 
                }
             }



         
    
          
           print "<p>Analisando o valor que você digitou, $valor1 segundos, equivalem a um total de:<p>
           <ul>
           <li> $semanas semanas </li>
           <li> $dias dias </li>
           <li>$horas horas </li>
           <li>$minutos minutos</li>
           <li>$rminutos segundos</li>
           </ul>";
           
                                   
        ?>
    </section>
</body>
</html>