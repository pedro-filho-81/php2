<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Instrução print PHP</title>
   <link rel="stylesheet" href="style.css">

</head> 
<body>
         
   <?php
      print "<h1>Instrução print PHP</h1>";
      print "<h2>Sintax print</h2>";
      
      print "<p>Print é uma construção de linguagem, não uma função. Portanto, você não precisa usar parênteses com ele também.</p>";
      
      print "<p><mark>int print(string \$arg )</mark></p>";
      
      print "<p>A instrução print pode ser usada para imprimir a string, strings de várias linhas, caracteres de escape, variável, array, etc.</p>";

      print "<p>print é uma instrução, que é usada para exibir a saída na tela. <br>
      Pode ser usado com ou sem parênteses: print() e print. <br>
      print retorna o valor 1.<br>
      Pode-se passar várias strings separadas por vírgula (,).</p>";
   ?>
   <hr>

   <h4>Exibir texto</h4>
   <p>
      O exemplo a seguir mostra como produzir texto com o comando <strong>print</strong><br>(observe que o texto pode conter marcação HTML):
   </p>
   <pre>
   Programa:
   < ?php
      print ( "< h2>PHP é engraçado!< /h2> )";
      print "Olá mundo!< br>";
      print "Eu estou aprendendo PHP!< br>";
      print "Esta ", "string ", "foi ", "feita ", "com multiplos parâmetros.";
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
      A seguir mostra como produzir texto e variáveis com a instrução: <strong>print</strong>
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
      print "< h2>" . $txt1 . "< /h2>";
      print "Estude PHP na " . $txt2 . "< br>";
      print "Soma = " . ($x + $y);
   ?>

   Saída:
   Aprenda PHP
   Estude PHP na W3Schools.com
   Soma = 9
   </pre>
   <hr>

</body>
</html>