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
   
    $anoatual = date("Y");
    $valor2 = $_GET['v2'] ?? $anoatual;
    $valor1 = $_GET['v1'] ?? 0;
    
    ?>
    <main>
        <h1>Somador de Valores</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Ano de nascimento</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Quer saber quantos anos terá em: (atualmente estamos em <?php print $anoatual?>)</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Verificar">
    </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
           $idade = $valor2 - $valor1;
            print "<p>Sua idade em $valor2 será $idade anos</p>";
          
            
        ?>
    </section>
</body>
</html>