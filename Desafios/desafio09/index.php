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
        <h1>Verificar raizes</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Número para análise</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <input type="submit" value="Verificar">
    </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
           
          $raizq = sqrt($valor1);
          //a função sqrt serve pra calcular raiz quadrada
          $raizc = pow($valor1, 1/3);
          //a função pow faz potenciação do valor, potencia, raiz quadrada é igual a valor, 1/2, cubica valor, 1/3...
           print "<p>A raiz quadrada do número $valor1 é igual a: $raizq</p>";
           print "<p>A raiz cúbica do número $valor1 é igual a: $raizc</p>";
                                   
        ?>
    </section>
</body>
</html>