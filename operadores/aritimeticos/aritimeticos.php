<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operadores Aritiméticos</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <h1>Operadores Aritiméticos</h1>

   <p>Os operadores aritméticos PHP são usados com valores numéricos para executar operações aritméticas comuns, tais como adição, subtração, multiplicação etc.</p>

   <p>Dados os valores $x = 10 $y = 6 calcule:</p>

   <!-- tabela dos operadores aritiméticos -->
   <table>
      <caption>RESUmO OPERADORES ARITImÉTICOS</caption>
      <tr>
         <th>Operator</th>
         <th>Name</th>
         <th>Example</th>
         <th>Print</th>
         <th>Result</th>
      </tr>
      <tr>
         <td class="opera">  +  </td>
         <td>Addition</td>
         <td>$x + $y</td>
         <td>Sum of $x and $y</td>
         <td class="opera">16</td>
      </tr>
      <tr>
         <td class="opera">  -  </td>
         <td>Subtraction</td>
         <td>$x - $y</td>
         <td>Difference of $x and $y</td>
         <td class="opera">4</td>
      </tr>
      <tr>
         <td class="opera">  *  </td>
         <td>Multiplication</td>
         <td>$x * $y</td>
         <td>Product of $x and $y</td>
         <td class="opera">60</td>
      </tr>
      <tr>
         <td class="opera">  /  </td>
         <td>Division</td>
         <td>$x / $y</td>
         <td>Quotient of $x and $y</td>
         <td class="opera">1,666667</td>
      </tr>
      <tr>
         <td class="opera">  %  </td>
         <td>Modulus</td>
         <td>$x % $y</td>
         <td>Remainder of $x and $y</td>
         <td class="opera">4</td>
      </tr>
      <tr>
         <td class="opera">  **  </td>
         <td>Exponentiation</td>
         <td>$x ** $y</td>
         <td>Result of raising $x to the $y'th power</td>
         <td class="opera">1.000.000</td>
      </tr>
   </table>
   <hr>

   <h2>Exemplo do Programa PHP</h2>
   <pre>
   &lt;?php
      // cria variáveis
      $x = 10; // assign 10 to x
      $y = 6; // assign 6 to y
      $sum = $x + $y; // soma
      $differece = $x - $y; // diferença
      $product = $x * $y; // produto
      $division = $x / $y; // divisão
      $remainder = $x % $y; // resto da divisão 
      $exponentiation = $x ** $y; // exponenciação

      // resultado
      echo "&lt;p>Soma $x + $y é igual a $sum&lt;/p>";

      echo "&lt;p>Diferença $x - $y é igual a " . $x - $y . ".&lt;/p>";

      echo "&lt;p>O produto entre $x e $y é igual a " . ($x * $y), " .&lt;/p>";

      echo "&lt;p>O quociente entre $x e $y é igual a " . ($x / $y) . " .&lt;/p>";

      echo "&lt;p>O resto da divisão entre $x e $y é igual a ", ($x % $y), " .&lt;/p>";

      echo "&lt;p>O valor de $x elevado a $y é igual a ", ($x ** $y), " .&lt;/p>";
   ?>
   </pre>
   <hr>

   <h2>Resultado do Programa PHP</h2>
   
   <p>Calculos usando os operadores Aritiméticos</p>
   
   <p>Dados os valores: $x = 10; e $y = 6; calcule:</p>

   <!-- AQUI Um PROGRAmA USANDO PHP -->
   <?php
      // cria variáveis
      $x = 10; // assign 10 to x
      $y = 6; // assign 6 to y
      $sum = $x + $y; // soma
      $differece = $x - $y; // diferença
      $product = $x * $y; // produto
      $division = $x / $y; // divisão
      $remainder = $x % $y; // resto da divisão 
      $exponentiation = $x ** $y; // exponenciação

      // resultado
      echo "<p>Soma $x + $y é igual a $sum</p>";

      echo "<p>Diferença $x - $y é igual a " . $x - $y . ".</p>";

      echo "<p>O produto entre $x e $y é igual a " . ($x * $y) . "</p>";

      echo "<p>O quociente entre $x e $y é igual a " . ($x / $y) . " .</p>";

      echo "<p>O resto da divisão entre $x e $y é igual a ", ($x % $y), " .</p>";

      echo "<p>O valor de $x elevado a $y é igual a ", ($x ** $y), " .</p>";
   ?>
   <hr>
   
</body>
</html>