<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Aspas Duplas</title>
</head>
<body>
    <h1 align= 'center'>Usando Aspas Duplas</h1>

    <?php
        
        $palavra = "Teste";
        $frase = "Isto é uma $palavra.";
        echo $frase;

        // exibe com nova linha usando tag br
        echo "<br>Estou colocando \"aspas duplas\" dentro de um texto com aspas duplas.";
    ?>

</body>
</html>