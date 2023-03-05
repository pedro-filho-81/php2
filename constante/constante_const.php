<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Constantes</title>
        <link rel="stylesheet" href=style.css">

</head>
<body>
        
<?php
        echo "<h1 align= 'center'>Constante define() ou const</h1>";
        echo "<hr>";
        echo "<p>As constantes são semelhante às variáveis, exceto que, uma vez definidas, <br>
                elas não podem ser indefinidas ou alteradas, em todo o programa <br>
                As constantes seguem as mesmas regras das variáveis.</p>";

        echo "<p>Um nome de constante válido começa com uma letra ou sublinhado 
            (sem sinal de $ antes o nome constante).</p>";
        
        echo "<p>Conforme convenção, as constantes PHP devem ser definidas em letras maiúsculas.</p>";

        echo "<p>As constantes PHP podem ser definidas de 2 maneiras: <br>
                <br>Usando a função <strong>define()</strong><br>
                Usando a palavra-chave <strong>const</strong></p>";

        echo "<p><mark>Nota: </mark> Ao contrário das variáveis, as constantes são automaticamente globais em todo o script.</p>";
        echo "<hr>";
    ?>
</body>
</html>