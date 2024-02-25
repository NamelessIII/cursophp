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
   
   
    $valor2 = $_GET['v2'] ?? 0;
    $valor1 = $_GET['v1'] ?? 0;
    
    ?>
    <main> 
        <h1>Somador de Valores</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor inicial</label>
            <input type="float" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Porcentagem de aumento</label>
            <input type="float" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Verificar">
    </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
           $pct1 = $valor1 / 100;
           $pctt = $pct1 * $valor2;
           $valorfinal = $valor1 + $pctt;
           

            print "<p>O produto custava R$$valor1,00 com o aumento de $valor2% valor final após o aumento é de R$$valorfinal</p>";
          
            
        ?>
    </section>
</body>
</html>