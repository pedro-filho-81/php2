<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operadores de Array</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Operadores de Array</h1>
   
   <p>Os operadores de array são usados no caso de array. Basicamente, esses operadores são usados para comparar os valores das matrizes.</p>
   
   <table>
      <caption>Tabela dos Operadores de Array</caption>
      <tr>
         <th>Operator</th>
         <th>Name</th>
         <th>Example</th>
         <th>Result</th>
      </tr>
      <tr>
         <td class="opera">+</td>
         <td>Union</td>
         <td>$x + $y</td>
         <td>Union of $x and $y</td>
      </tr>
      <tr>
         <td class="opera">==</td>
         <td>Equality</td>
         <td>$x == $y</td>
         <td>Returns true if $x and $y have the same key/value pairs</td>	
      </tr>
      <tr>
         <td class="opera">===</td>
         <td>Identity</td>
         <td>$x === $y</td>
         <td>Returns true if $x and $y have the same key/value pairs in the same order and of the same types</td>
      </tr>
      <tr>
         <td class="opera">!=</td>
         <td>Inequality</td>
         <td>$x != $y</td>
         <td>Returns true if $x is not equal to $y</td>
      </tr>
      <tr>
         <td class="opera"><></td>
         <td>Inequality</td>
         <td>$x <> $y</td>
         <td>Returns true if $x is not equal to $y</td>
      </tr>
      <tr>
         <td class="opera">!==</td>
         <td>Non-identity</td>
         <td>$x !== $y</td>
         <td>Returns true if $x is not identical to $y</td>
      </tr>
   </table>
   <hr>

   <h2>Operador de União <mark>( + )</mark></h2>

   <pre>
   Exemplo
   &lt;<b>?php</b>
   <mark>$x</mark> = array("a" => "red", "b" => "green");  
   <mark>$y</mark> = array("c" => "blue", "d" => "yellow");  

   // union of $x and $y
   echo "&lt;<b>p</b>>";
   print_r( $x <mark> + </mark> $y);
   echo "&lt;<b>/p</b>>";
   <b>?</b>></pre>

   <h3>Resultado do programa acima</h3>

   <?php
      $x = array("a" => "red", "b" => "green");  
      $y = array("c" => "blue", "d" => "yellow");  

      // union of $x and $y
      echo "<p>";

      print_r( $x  +  $y);
      
      echo "</p>";
   ?>
   <hr>
   
   <h2>Operador de Igualdade <mark>( == )</mark></h2>

   <pre>
   Exemplo
   &lt;<b>?php</b>
   <mark>$x</mark> = array("a" => "red", "b" => "green");  
   <mark>$y</mark> = array("c" => "blue", "d" => "yellow");  

   // Retorne TRUE se $x e $y tiverem o mesmo par chave/valor
   echo "&lt;<b>p</b>>";
   var_dump( $x <mark> == </mark> $y);
   echo "&lt;<b>/p</b>>";
   <b>?</b>></pre>

   <h3>Resultado do programa acima</h3>

   <?php
      $x = array("a" => "red", "b" => "green");  
      $y = array("c" => "blue", "d" => "yellow");  

      // Retorne TRUE se $x e $y tiverem o mesmo par chave/valor
      echo "<p>";

      var_dump( $x == $y);
      
      echo "</p>";
   ?>
   <hr>
   
   <h2>Operador de Idêntico <mark>( === )</mark></h2>

   <pre>
   Exemplo
   &lt;<b>?php</b>
   <mark>$x</mark> = array("a" => "red", "b" => "green");  
   <mark>$y</mark> = array("c" => "blue", "d" => "yellow");  

   /*
      Retorne TRUE se $x e $y tiverem o mesmo 
      par chave/valor do mesmo tipo na mesma ordem
   */
   echo "&lt;<b>p</b>>";
   var_dump( $x <mark> === </mark> $y);
   echo "&lt;<b>/p</b>>";
   <b>?</b>></pre>

   <h3>Resultado do programa acima</h3>

   <?php
      $x = array("a" => "red", "b" => "green");  
      $y = array("c" => "blue", "d" => "yellow");  

      /*
         Retorne TRUE se $x e $y tiverem o mesmo 
         par chave/valor do mesmo tipo na mesma ordem
      */
      echo "<p>";

      var_dump( $x === $y);
      
      echo "</p>";
   ?>
   <hr>
   
   <h2>Operador de Diferente <mark>( != )</mark></h2>

   <pre>
   Exemplo
   &lt;<b>?php</b>
   <mark>$x</mark> = array("a" => "red", "b" => "green");  
   <mark>$y</mark> = array("c" => "blue", "d" => "yellow");  

   /*
      Retorne TRUE se $x não for igual a $y
   */
   echo "&lt;<b>p</b>>";
   var_dump( $x <mark> != </mark> $y);
   echo "&lt;<b>/p</b>>";
   <b>?</b>></pre>

   <h3>Resultado do programa acima</h3>

   <?php
      $x = array("a" => "red", "b" => "green");  
      $y = array("c" => "blue", "d" => "yellow");  

      /*
         Retorne TRUE se $x não for igual a $y
      */
      echo "<p>";

      var_dump( $x != $y);
      
      echo "</p>";
   ?>
   <hr>
   
   <h2>Operador de Diferente <mark>( <> )</mark></h2>

   <pre>
   Exemplo
   &lt;<b>?php</b>
   <mark>$x</mark> = array("a" => "red", "b" => "green");  
   <mark>$y</mark> = array("c" => "blue", "d" => "yellow");  

   /*
      Retorne TRUE se $x não for igual a $y
   */
   echo "&lt;<b>p</b>>";
   var_dump( $x <mark> <> </mark> $y);
   echo "&lt;<b>/p</b>>";
   <b>?</b>></pre>

   <h3>Resultado do programa acima</h3>

   <?php
      $x = array("a" => "red", "b" => "green");  
      $y = array("c" => "blue", "d" => "yellow");  

      /*
         Retorne TRUE se $x não for igual a $y
      */
      echo "<p>";

      var_dump( $x <> $y);
      
      echo "</p>";
   ?>
   <hr>
   <h2>Operador Não Idêntico <mark>( !== )</mark></h2>

   <pre>
   Exemplo
   &lt;<b>?php</b>
   <mark>$x</mark> = array("a" => "red", "b" => "green");  
   <mark>$y</mark> = array("c" => "blue", "d" => "yellow");  

   /*
      Retorne TRUE se $x não for idêntico a $y
   */
   echo "&lt;<b>p</b>>";
   var_dump( $x <mark> !== </mark> $y);
   echo "&lt;<b>/p</b>>";
   <b>?</b>></pre>

   <h3>Resultado do programa acima</h3>

   <?php
      $x = array("a" => "red", "b" => "green");  
      $y = array("c" => "blue", "d" => "yellow");  

      /*
         Retorne TRUE se $x não for idêntico ao $y
      */
      echo "<p>";

      var_dump( $x !== $y);
      
      echo "</p>";
   ?>
   <hr>
   
</body>
</html>