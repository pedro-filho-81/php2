<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Incremento / Decremento</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Operadores de Incremento ou Decremento</h1>
   
   <p>Os operadores de incremento são usados para incrementar o valor de uma variável.</p>

   <p>Os operadores de decréscimo são usados para diminuir o valor de uma variável.</p>
   
   <p>Dado o valor para a variável $x = 10; incremente ou decremente. esse valor.</p>

   <!-- CRIA A TABELA DOS OPERADORES -->
   <table>
      <caption>OPERADORES DE INCREmENTO E DECREmENTO</caption>
      <tr> <!--FIRST LINE PRImEIRA LINHA-->
         <th>Operator</th>
         <th>Name</th>
         <th>Description</th>
         <th>Result</th>
      </tr>
      <tr> <!-- SECOND LINE SEGUNDA LINHA -->
         <td class="opera">++$x</td>
         <td>Pre-increment</td>
         <td>Increments $x by one, then returns $x = </td>
         <td class="opera">11</td>
      </tr>
      <tr> <!-- THIRD LINE TERCEIRA LINHA-->
         <td class="opera">$x++</td>
         <td>Post-increment</td>
         <td>Returns $x, then increments $x by one</td>
         <td class="opera">10</td>
      </tr>
      <tr> <!-- QUARTA LINHA--> 
         <td class="opera">--$x</td>
         <td>Pre-decrement</td>
         <td>Decrements $x by one, then returns $x = </td>
         <td class="opera">9</td>
      </tr>
      <tr>
         <td class="opera">$x--</td>
         <td>Post-decrement</td>
         <td>Returns $x, then decrements $x by one</td>
         <td class="opera">10</td>
      </tr>
   </table>   
   <hr>

   <h2>Exemplo de Programa PHP</h2>

   <pre>
   &lt;?php 
      // variável
      <mark>$x</mark> = 10; // assign 10 to x
      // resultado
      echo '&lt;<b>p</b>>Pré-incremento: <mark>++$x</mark> adiciona 1 a variável <mark>$x antes</mark> dela ser "chamada",
       X vale ' . ++$x . '&lt;/<b>p</b>>';
      
      <mark>$x</mark> = 10; // assign 10 to x
      echo '&lt;<b>p</b>>Pós-incremento: <mark>$x++</mark> adiciona 1 a variável <mark>$x depois</mark> dela ser "chamada",
       X vale ' . $x++ . '&lt;/<b>p</b>>';
      
      <mark>$x</mark> = 10; // assign 10 to x
      echo '&lt;<b>p</b>>Pré-decremento: <mark>--$x</mark> retira 1 da variável <mark>$x antes</mark> dela ser "chamada",
       X vale ' . --$x . '&lt;/<b>p</b>>';
      
      <mark>$x</mark> = 10; // assign 10 to x
      echo '&lt;<b>p</b>>Pós-decremento: <mark>$x--</mark> retira 1 da variável <mark>$x depois</mark> dela ser "chamada",
       X vale ' . $x-- . '&lt;/<b>p</b>>';
   ?></pre>
   <hr>

   <h2>Resultado do programa PHP</h2>

   <?php 
      // variável
      $x = 10; // assign 10 to x

      // resultado
      echo '<p>$x = 10;</p>';
      echo '<p>Pré-incremento: <mark>++$x</mark> adiciona 1 a variável <mark>$x antes</mark> dela ser "chamada", X vale ' . ++$x . '</p>';

      $x = 10; // assign 10 to x
      echo '<p>Pós-incremento: <mark>$x++</mark> adiciona 1 a variável <mark>$x depois</mark> dela ser "chamada", X vale ' . $x++ . '</p>';
      
      $x = 10; // assign 10 to x
      echo '<p>Pré-decremento: <mark>--$x</mark> retira 1 da variável <mark>$x antes</mark> dela ser "chamada", X vale ' . --$x . '</p>';
      
      $x = 10; // assign 10 to x
      echo '<p>Pós-decremento: <mark>$x--</mark> retira 1 da variável <mark>$x depois</mark> dela ser "chamada", X vale ' . $x-- . '</p>';
   ?>
   <hr>

</body>
</html>