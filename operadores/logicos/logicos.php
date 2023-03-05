<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operadores lógicos</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <h1>Operadores lógicos PHP</h1>

   <p>Os operadores lógicos PHP são usados para combinar instruções condicionais.</p>

   <h3>Operador AND</h3>
   <pre>
   &lt;<b>?php</b>
      $x = 100;  
      $y = 50;

      // se x igual a 100 E y igual a 50
      if ($x == 100 <mark>and</mark> $y == 50) {
         // exibir
         echo "&lt;<b>p</b>>Hello world!&lt;<b>/p</b>>";
      }
   <b>?></b></pre>
   <h3>Resultado do operador AND</h3>
   <?php
      $x = 100;  
      $y = 50;

      // se x igual a 100 E y igual a 50
      if ($x == 100 and $y == 50) {
         // exibir
         echo "<p>Hello world!</p>";
      }
   ?>
   <hr>
   
   <h3>Operador OR</h3>
   <pre>
   &lt;<b>?php</b>
      $x = 100;  
      $y = 50;

      // se x igual a 100 OU y igual a 50
      if ($x == 100 <mark>or</mark> $y == 50) {
         // imprima 
         echo "&lt;<b>p</b>>Hello world!&lt;<b>/p</b>>";
      }
   <b>?></b></pre>
   <h3>Resultado do operador OR</h3>
   <?php
      $x = 100;  
      $y = 50;
      
      // se x igual a 100 OU y igual a 50
      if ($x == 100 or $y == 50) {
         // imprima
         echo "<p>Hello world!</p>";
      }
   ?>
   <hr>

   <h3>Operador XOR</h3>
   <pre>
   &lt;<b>?php</b>
      $x = 100;  
      $y = 50;

      // se x igual a 100 XOU y igual a 80
      if ($x == 100 <mark>xor</mark> $y == 80) {
         // imprima 
         echo "&lt;<b>p</b>>Hello world!&lt;<b>/p</b>>";
      }
   <b>?></b></pre>
   <h3>Resultado do operador XOR</h3>
   <?php
      $x = 100;  
      $y = 50;
      
      // se x igual a 100 XOU y igual a 80
      if ($x == 100 xor $y == 80) {
         // imprima
         echo "<p>Hello world!</p>";
      }
   ?>
   <hr>

   <h3>Operador &&</h3>
   <pre>
   &lt;<b>?php</b>
      $x = 100;  
      $y = 50;

      // se x igual a 100 && y igual a 50
      if ($x == 100 <mark>&&</mark> $y == 50) {
         // imprima 
         echo "&lt;<b>p</b>>Hello world!&lt;<b>/p</b>>";
      }
   <b>?></b></pre>
   <h3>Resultado do operador &&</h3>
   <?php
      $x = 100;  
      $y = 50;
      
      // se x igual a 100 && y igual a 50
      if ($x == 100 && $y == 50) {
         // imprima
         echo "<p>Hello world!</p>";
      }
   ?>
   <hr>

   <h3>Operador ||</h3>
   <pre>
   &lt;<b>?php</b>
      $x = 100;  
      $y = 50;

      // se x igual a 100 || y igual a 50
      if ($x == 100 <mark>||</mark> $y == 50) {
         // imprima 
         echo "&lt;<b>p</b>>Hello world!&lt;<b>/p</b>>";
      }
   <b>?></b></pre>
   <h3>Resultado do operador ||</h3>
   <?php
      $x = 100;  
      $y = 50;
      
      // se x igual a 100 || y igual a 50
      if ($x == 100 || $y == 50) {
         // imprima
         echo "<p>Hello world!</p>";
      }
   ?>
   <hr>

   <h3>Operador ( ! )</h3>
   <pre>
   &lt;<b>?php</b>
      $x = 100;  

      // se x diferente de 90
      if ($x <mark>!==</mark> 90) {
         // imprima 
         echo "&lt;<b>p</b>>Hello world!&lt;<b>/p</b>>";
      }
   <b>?></b></pre>
   <h3>Resultado do operador ( ! )</h3>
   <?php
      $x = 100;  
      
      // se x diferente de 90
      if ($x !== 90) {
         // imprima
         echo "<p>Hello world!</p>";
      }
   ?>
   <hr>

   <Table>
   <caption>Tabela dos Operadores Lógicos</caption>
   <tr>
      <th>Operator</th>
      <th>Name</th>
      <th>Example</th>
      <th>Result</th>
   </tr>
   <tr>
      <td>and</td>
      <td>And</td>
      <td>$x and $y</td>
      <td>True if both $x and $y are true</td>
   </tr>
   <tr>
      <td>or</td>
      <td>Or</td>
      <td>$x or $y</td>
      <td>True if either $x or $y is true</td>
   </tr>
   <tr>
      <td>xor</td>
      <td>Xor</td>
      <td>$x xor $y</td>
      <td>True if either $x or $y is true, but not both</td>
   </tr>
   <tr>
      <td>&&</td>
      <td>And</td>
      <td>$x && $y</td>
      <td>True if both $x and $y are true</td>
   </tr>
   <tr>
      <td>||</td>
      <td>Or</td>
      <td>$x || $y</td>
      <td>True if either $x or $y is true</td>
   </tr>
   <tr>
      <td> ! </td>
      <td>Not</td>
      <td>!$x</td>
      <td>True if $x is not true</td>
   </tr>
   </Table>
   <hr>

</body>
</html>