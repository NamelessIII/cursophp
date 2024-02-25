<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 

    //0x = hexadecimal
    //0b = binário
    //0 = octal

    //var_dump($var); mostra o tipo da variavel (float, string, int, e bolean)

    //3e2 significa 3x10² 
    //5e3 significa 5x10³ (sempre o resultado será float, a nao ser que se coloque (int) antes da variavel ex: $num = (int) 3e2)

    //$vet = [6, 2.5, "Maria", 3, false];

            $num = 0x1A;
        echo "O valor da variável é $num";


        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        
        //aspas simples são usadas pra strings sem interpretação, o que escreveu será mostrado
        //aspas duplas interpretam o conteúdo, se colocar uma variavel, unicode, ira mostrar a variavel.
        //não é possivel usar aspas simples dentro de aspas simples, nem aspas duplas dentro de aspas duplas:

        //$nom = Rodrigo
        //$snom = Nogueira
        //echo = "Rodrigo "Minotauro" Nogueira"

        //esse exemplo irá dar erro, pois há aspas duplas dentro de aspas duplas, a solução é usar contrabarra:
        //echo = "Rodrigo \"Minotauro\" Nogueira"

        //Essa contrabarra é usada como escape
        // \n= nova linha
        // \t Tabulação horizontal (tab)
        // \\ contrabarra (colocando só uma não aparece)
        // \$ pra mostrar o cifrão
        // \u{} unicode
    ?>
</body>
</html>