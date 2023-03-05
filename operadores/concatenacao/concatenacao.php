<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operadores de Concatenação PHP</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <h2>Operadores de cadeia de caracteres PHP</h2>

   <p>PHP tem dois operadores que são especialmente projetados para strings.</p>

   <table>
      <tr>
         <th>Operator</th>
         <th>Name</th>
         <th>Example</th>
         <th>Result</th>
      </tr>
      <tr>
         <td class="opera"><strong> . </strong></td>
         <TD>Concatenation</TD>
         <td>$txt1<mark> . </mark>$txt2</td>
         <td>Concatenation of $txt1 and $txt2</td>
      </tr>
      <tr>
         <td class="opera"><strong> .= </strong></td>
         <td>Concatenation assignment</td>
         <td>$txt1<mark> .= </mark>$txt2</td>
         <td>Appends $txt2 to $txt1</td>
      </tr>
   </table>
   <hr>

   <h2>Operador de Concatenação Ponto <mark>( . )</mark></h2>

   <pre>
   Exemplo
   &lt;<mark>?php</mark>
      $txt1 = "<mark>Hello</mark>";
      $txt2 = " <mark>world!</mark>";
   
      echo "&lt;<b>p</b>>$txt1"<mark> . </mark>"$txt2&lt;<b>/p</b>>";
   <mark>?</mark>></pre>

   <h3>Resultado do programa acima</h3>

   <?php
      $txt1 = "Hello";
      $txt2 = " world!";
   
      echo "<p>$txt1" . "$txt2</p>";
   ?>
   <hr>

   <h2>Operador de Concatenação e Atribuição<mark>( .= )</mark></h2>

   <pre>
   Exemplo
   &lt;<mark>?php</mark>
      $txt1 = "<mark>Hello</mark>";
      $txt2 = " <mark>world!</mark>";
      $txt1 <mark>.=</mark> $txt2;  // concatenação e atribuição

      echo "&lt;<b>p</b>>$txt1&lt;<b>/p</b>>";
   <mark>?</mark>></pre>

   <h3>Resultado do programa acima</h3>
   
   <?php
      $txt1 = "Hello";
      $txt2 = " world!";
      $txt1 .= $txt2;  // concatenação e atribuição

      echo "<p>$txt1</p>";
   ?>
   <hr>

</body>
</html>