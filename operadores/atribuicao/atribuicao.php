<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operadores de Atribuição</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <h2>Operadores de atribuição</h2>

   <p>Os operadores de atribuição PHP são usados com valores numéricos para gravar um valor em uma variável.</p>

   <p>O operador de atribuição básica no PHP é <mark>" = "</mark>. Isso significa que o operando esquerdo é definido pelo valor da expressão de atribuição à direita.</p>

   <p>Dado o valor para a variável $x = 10 e $y = 6, calcule:</p>

   <!-- CRIA A TABELA DOS OPERADORES DE ATRIBUIÇÃO -->
   <table>
      <caption>ASSIGNmENT OPERATORES</caption>
      <tr>
         <th>Assignment</th>
         <th>Same as...</th>
         <th>Description</th>
         <th>Show it</th>
      </tr>
      <tr>
         <td class="opera">x <mark> = </mark> 10</td>
         <td class="opera">x = 10</td>
         <td>The left operand gets set to the value of the expression on the right</td>
         <td class="opera">10</td>
      </tr>
      <tr>
         <td class="opera">x <mark> += </mark> y</td>
         <td class="opera">x = x + y</td>
         <td>Addition</td>
         <td class="opera">16</td>
      </tr>
      <tr>   
         <td class="opera">x <mark> -= </mark> y</td>
         <td class="opera">x = x - y</td>
         <td>Subtraction</td>
         <td class="opera">4</td>
      </tr>
      <tr>
         <td class="opera">x <mark> *= </mark> y</td>
         <td class="opera">x = x * y</td>
         <td>Multiplication</td>
         <td class="opera">60</td>
      </tr>   
      <tr>
         <td class="opera">x <mark> /= </mark> y</td>
         <td class="opera">x = x / y</td>
         <td>Division</td>
         <td class="opera">1.6666666666667</td>
      </tr>   
      <tr>
         <td class="opera">x <mark> %= </mark> y</td>
         <td class="opera">x = x % y</td>
         <td>Modulus</td>
         <td class="opera">4</td>
      </tr>
   </table>
   <hr>

   <h2>Exemplo do Programa PHP</h2>
   <pre>
   &lt;?php
      // cria variáveis
      $x = 10; // assign 10 to x
      $y = 6; // assign 6 to y
      $sum = $x + $y;
      
      // resultado
      echo '&lt;p>A expresão $x += $y tem como resultado $x = ' . $sum . "&lt;/p>";

      $x = 10; $y = 6; $x -= $y;
      echo '&lt;p>A expresão $x -= $y tem como resultado $x = ' . $x . "&lt;/p>";

      $x = 10; $y = 6; $x *= $y;
      echo '&lt;p>A expresão $x *= $y tem como resultado $x = ' . $x . "&lt;/p>";

      $x = 10; $y = 6; $x /= $y;
      echo '&lt;p>A expresão $x /= $y tem como resultado $x = ' . $x . "&lt;/p>";
      
      $x = 10; $y = 6; $x %= $y;
      echo '&lt;p>A expresão $x %= $y tem como resultado $x = ' . $x . "&lt;/p>";
   ?>
   </pre>
   <hr>

   <h2>Resultado do Programa PHP</h2>
   
   <p>Calculos usando os operadores de Atribuição.</p>
   
   <p>Dados os valores: $x = 10; e $y = 6; calcule:</p>

   <!-- AQUI Um PROGRAmA USANDO PHP -->
   <?php
      // cria variáveis
      $x = 10; // assign 10 to x
      $y = 6; // assign 6 to y
      // resultado
      $x += $y;
      echo '<p>A expresão $x += $y tem como resultado $x = ' . $x . "</p>";

      $x = 10; $y = 6; $x -= $y;
      echo '<p>A expresão $x -= $y tem como resultado $x = ' . $x . "</p>";

      $x = 10; $y = 6; $x *= $y;
      echo '<p>A expresão $x *= $y tem como resultado $x = ' . $x . "</p>";

      $x = 10; $y = 6; $x /= $y;
      echo '<p>A expresão $x /= $y tem como resultado $x = ' . $x . "</p>";
      
      $x = 10; $y = 6; $x %= $y;
      echo '<p>A expresão $x %= $y tem como resultado $x = ' . $x . "</p>";
   ?>
   <hr>

</body>
</html>