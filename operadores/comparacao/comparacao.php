<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operadores de Comparação</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <h2>Operadores de Comparação</h2>

   <p>Os operadores de comparação são usados para comparar dois valores (número ou cadeia de caracteres):</p>

   <p>Dado os valores $x = 10; e $y = 6; informe: verdadeiro ou falso.</p>

   <table>
      <caption>OPERADORES DE COmPARAÇÃO</caption>
      <tr>
         <th>Operator</th>
         <th>Name</th>
         <th>Example</th>
         <th>Result</th>
         <th>Show it</th>
      </tr>
      <tr>
         <td class="opera">==</td>
         <td class="opera">Equal</td>
         <td>$x == $y</td>
         <td>Returns true if $x is equal to $y</td>
         <td class="opera">falso</td>
      </tr>
      <tr>
         <td class="opera">===</td>
         <td class="opera">Identical</td>
         <td>$x === $y</td>
         <td>Returns true if $x is equal to $y, and they are of the same type</td>
         <td class="opera">falso</td>
      </tr>
      <tr>
         <td class="opera">!=</td>
         <td class="opera">Not equal</td>
         <td>$x != $y</td>
         <td>Returns true if $x is not equal to $y</td>
         <td class="opera">verdadeiro</td>
      </tr>
      <tr>
         <td class="opera"><></td>
      	<td class="opera">Not equal</td>
         <td>$x <> $y</td>
         <td>Returns true if $x is not equal to $y</td>
         <td class="opera">verdadeiro</td>
      </tr>
      <tr>
         <td class="opera">!==</td>
         <td class="opera">Not identical</td>
         <td>$x !== $y</td>
         <td>Returns true if $x is not equal to $y, or they are not of the same type</td>
         <td class="opera">verdadeiro</td>
      </tr>
      <tr>
         <td class="opera">></td>
         <td class="opera">Greater than</td>
         <td>$x > $y</td>
         <td>Returns true if $x is greater than $y</td>
         <td class="opera">verdadeiro</td>
      </tr>
      <tr>         
         <td class="opera"><</td>
         <td class="opera">Less than</td>
         <td>$x < $y</td>
         <td>Returns true if $x is less than $y</td>
         <td class="opera">falso</td>
      </tr>
      <tr>
         <td class="opera">>=</td>
         <td class="">Greater than or equal to</td>
         <td>$x >= $y</td>
         <td>Returns true if $x is greater than or equal to $y</td>
         <td class="opera">verdadeiro</td>
      </tr>
      <tr>
         <td class="opera"><=</td>
         <td class="opera">Less than or equal to</td>
         <td>$x <= $y</td>
         <td>Returns true if $x is less than or equal to $y</td>
         <td class="opera">falso</td>
      </tr>
      <tr>
         <td class="opera"><=></td>
         <td class="opera">Spaceship</td>
         <td>$x <=> $y</td>
         <td>Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.</td>
         <td class="opera">verdadeiro</td>
      </tr>
   </table>
   <hr>
   
   <h2>O Operador  Ternário <mark>( ? : )</mark></h2>
      
   <p>O operador condicional ternário no PHP é usado para retornar um valor dependendo da condição na expressão.</p>

   <pre>
      Exemplo:
      <strong>(se $x maior que $y) ? '<mark>verdadeiro</mark>' : '<mark>falso</mark>';</strong>
      se x maior que y 
      retorne verdadeiro 
      se não 
      retorne falso.</pre>

   <p>Dados os valores $x = 10; $y = 6; verifique se é verdadeiro ou falso a comparação:</p>

   <table class="ternario">
      <caption>OPERADOR CONDICIONAL TERNÁRIO (? :) </caption>
      <tr>   
         <th>Operator</th>
         <th>Name</th>
         <th>Example</th>
         <th>Result</th>
      </tr>
      <tr>
         <td class="opera">? :</td>
         <td>Ternary</td>
         <td>$x = ($x >= $y) ? true : false;</td>
         <td class="opera">true</td>
      </tr>
   </table>
   <ul class="ternario">
      <li>Returns the value of $x.</li>
      <li>The value of $x is true if ($x >= $y) = TRUE.</li>
      <li>The value of $x is false if ($x <= $y) = FALSE.</li>
   </ul>
   <hr>

   <h2>Programa em PHP com os operadores de comparação</h2>
   
   <p>Dados os valores $x = 10; $y = 6; verifique se é verdadeiro ou falso a comparação:</p>

   <P>O programa PHP usa o operador  condicional ternário, que retorna verdadeiro ou falso, dependento do operador de comparação.</P>

   <p><mark>OBS :</mark> O operador ternário no programa não é necessário, pois, <br>o retorno é true ou false quando se usa o operador de comparação.</p>
   <pre>
   &lt;?php
      // variáveis
      $x = 10; // x vale 10
      $y = 6; // y vale 6

      // exibir resultado
      echo '&lt;p class="resp">IGUAL - $x <mark>==</mark> $y? ' . 
      ( $x == $y ? "verdadeiro" : "falso") . '&lt;/p>';
      
      echo '&lt;p class="resp">IDÊNTICO - $x <mark>===</mark> $y? ' . 
      ( $x === $y ? "verdadeiro" : "falso") . '&lt;/p>';

      echo '&lt;p class="resp">DIFERENTE - $x <mark>!=</mark> $y? ' . 
      ( $x != $y ? "verdadeiro" : "falso") . '&lt;/p>';
      
      echo '&lt;p class="resp">DIFERENTE - $x <mark><></mark> $y? ' . 
      ( $x <> $y ? "verdadeiro" : "falso") . '&lt;/p>';
      
      echo '&lt;p class="resp">NÃO IDÊNTICO - $x  $y<mark>!==</mark>? ' . 
      ( $x !== $y ? "verdadeiro" : "falso") . '&lt;/p>';
      
      echo '&lt;p class="resp">MAIOR QUE - $x <mark> > </mark> $y? ' . 
      ( $x > $y ? "verdadeiro" : "falso") . '&lt;/p>';
      
      echo '&lt;p class="resp">MENOR QUE - $x <mark> < </mark> $y? ' . 
      ( $x < $y ? "verdadeiro" : "falso") . '&lt;/p>';
      
      echo '&lt;p class="resp">MAIOR OU IGUAL - $x <mark> >= </mark> $y? ' . 
      ( $x >= $y ? "verdadeiro" : "falso") . '&lt;/p>';
      
      echo '&lt;p class="resp">MENOR OU IGUAL - $x <mark> <= </mark> $y? ' . 
      ( $x <= $y ? "verdadeiro" : "falso") . '&lt;/p>';
      
      echo '&lt;p class="resp">NAVE ESPACIAL - $x <mark> <=> </mark> $y? ' . 
      ( $x &lt;=&gt; $y ? "verdadeiro" : "falso") . '&lt;/p>';
   ?>
   </pre>
   <hr>

   <h2>Resultado do programa PHP</h2>

   <?php
      // variáveis
      $x = 10; // x vale 10
      $y = 6; // y vale 6

      // exibir resultado
      echo '<p class="resp">$x = 10; // x recebe 10</p>';
      echo '<p class="resp">$y = 6; // y recebe 6</p>';

      echo '<p class="resp">IGUAL - $x <mark>==</mark> $y? ' . ( $x == $y ? "verdadeiro" : "falso") . '</p>';

      echo '<p class="resp">IDÊNTICO - $x <mark>===</mark> $y? ' . ( $x === $y ? "verdadeiro" : "falso") . '</p>';

      echo '<p class="resp">DIFERENTE - $x <mark>!=</mark> $y? ' . ( $x != $y ? "verdadeiro" : "falso") . '</p>';

      echo '<p class="resp">DIFERENTE - $x <mark><></mark> $y? ' . ( $x <> $y ? "verdadeiro" : "falso") . '</p>';
      
      echo '<p class="resp">NÃO IDÊNTICO - $x <mark>!==</mark> $y? ' . ( $x !== $y ? "verdadeiro" : "falso") . '</p>';
      
      echo '<p class="resp">MAIOR QUE - $x <mark> > </mark> $y? ' . ( $x > $y ? "verdadeiro" : "falso") . '</p>';
      
      echo '<p class="resp">MENOR QUE - $x <mark> < </mark> $y? ' . ( $x < $y ? "verdadeiro" : "falso") . '</p>';
      
      echo '<p class="resp">MAIOR OU IGUAL - $x <mark> >= </mark> $y? ' . ( $x >= $y ? "verdadeiro" : "falso") . '</p>';
      
      echo '<p class="resp">MENOR OU IGUAL - $x <mark> <= </mark> $y? ' . ( $x <= $y ? "verdadeiro" : "falso") . '</p>';
      
      echo '<p class="resp">NAVE ESPACIAL - $x <mark><=></mark> $y? ' . ( $x <=> $y ? "verdadeiro" : "falso") . '</p>';
   ?>
   <hr>

</body>
</html>