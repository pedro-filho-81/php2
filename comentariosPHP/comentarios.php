<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align='center'>Comentários PHP</h1>
    <hr>

    <p>
        Os comentários do PHP podem ser usados para descrever qualquer linha <br>
        de código para que outro desenvolvedor possa entender o código facilmente. <br>
        Ele também pode ser usado para ocultar qualquer código.
    </p>

    <p>
        PHP suporta comentários de linha única e de várias linhas. <br>
        Esses comentários são semelhantes aos comentários de estilo C/C++ e Perl <br>
        (estilo shell Unix).
    </p>
    <hr>

    <h4>Exemplo: Comentários PHP</h4>

    <!-- este é um comentário no estilo Html -->
    <p>< !-- este é um comentário no estilo Html --></p>

    <?php
        
        // Comentário de uma linha em Estilo C++     
        echo "(barra,barra) <br><strong>//</strong> Comentário de uma linha no estila da linguagem C++; <br>";

        echo '<br>Isto é um teste'; 
        
        /* Este é um comentário de múltiplas linhas
            ainda outra linha de comentário
            estilo linguagem C */

        echo "<p>(barra asterisco abre o comentário) <br>
                <strong>/*</strong><br>
                    Este é um comentário de múltiplas linhas <br>
                    no estilo da linguage C <br>
                    aqui ainda é outra linha de comentário <br>
                    (arterisco barra fecha o comentário) <br>
                <strong>*/</strong></p>";
        
        echo'Isto é ainda outro teste';

        echo "<p>
                    <strong>#</strong> Este é um comentário de uma linha no estilo shell 
            </p>";
        
        echo 'Um teste final'; 

        echo "<hr>"; 
        
        # Este é um comentário de uma linha no estilo shell 
    ?>
    <hr>

    <h4>Exemplo: Comentário2 PHP</h4>
    <?php
        echo 'Isto é um teste <br> '; 
        echo "// Estilo de comentário de uma linha em  C++ <br>";

        echo "/* Este é um comentário de múltiplas linhas <br>";
        echo "ainda outra linha de comentário */ <br>";
        
        echo 'Isto é ainda outro teste <br>';
        echo 'Um teste final '; 
        echo "# Este é um comentário de uma linha no estilo shell ";
    ?>
    <hr>

</body>
</html>