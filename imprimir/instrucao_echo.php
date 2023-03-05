<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Instrução echo PHP</title>
   <link rel="stylesheet" href="style.css">
   
</head>
<body>
         
   <?php
      echo "<h1>Instrução echo PHP</h1>";
      echo "<h2>Sintax echo</h2>";
      
      echo "<p>Echo é uma construção de linguagem, não uma função. <br> Portanto, você não precisa usar parênteses com ele.</p>";
      
      echo "<p><mark>void echo ( string $ arg 1 [, string $... ] )</mark></p>";
      
      echo "<p>A instrução echo pode ser usada para imprimir a string, strings de várias linhas, caracteres de escape, variável, array, etc.</p>";

      echo "<p>echo é uma instrução, que é usada para exibir a saída na tela. <br>
      Pode ser usado com ou sem parênteses: echo() e echo. <br>
      echo não retorna nenhum valor.<br>
      Pode-se passar várias strings separadas por vírgula (,).</p>";
   ?>
   <hr>

   <h4>Exibir texto</h4>
   <p>
      O exemplo a seguir mostra como produzir texto com o comando <strong>echo</strong><br>(observe que o texto pode conter marcação HTML):
   </p>
   <pre>
   Programa:
   < ?php
      echo ( "< h2>PHP é engraçado!< /h2> )";
      echo "Olá mundo!< br>";
      echo "Eu estou aprendendo PHP!< br>";
      echo "Esta ", "string ", "foi ", "feita ", "com multiplos parâmetros.";
   ?>

   Saída:
   PHP é engraçado!
   Olá mundo!
   Eu estou aprendendo PHP!
   Esta string foi feita com multiplos parâmetros.
   </pre>
   <hr>
   
   <h4>Exibir variáveis</h4>

   <p>
      A seguir mostra como produzir texto e variáveis com a instrução: <strong>echo</strong>
   </p>
   <pre>
   < ?php
      // variáveis
      $txt1 = "Aprenda PHP";
      $txt2 = "W3Schools.com";
      $x = 5;
      $y = 4;

      // exibe na tela
      // O ponto (.) significa concatenação união de A com B fica AB
      echo "< h2>" . $txt1 . "< /h2>";
      echo "Estude PHP na " . $txt2 . "< br>";
      echo "Soma = " . ($x + $y);
   ?>

   Saída:
   Aprenda PHP
   Estude PHP na W3Schools.com
   Soma = 9
   </pre>
   <hr>

</body>
</html>