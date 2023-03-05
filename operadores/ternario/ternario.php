<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operador ternário ( ? : )</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <h1>Operador ternário ( ? : )</h1>

   <p>O operador ternário (expressão ? verdadeiro : falso) retorna verdadeiro ou falso a depender do resultado da expressão.</p>
   
   <table>
   <tr>
      <th>Operator</th>
      <th>Name</th>
      <th>Example</th>
      <th>Result</th>
   </tr>
   <tr>
      <td class="opera"><b>? :</b></td>
      <td>Ternary</td>
      <td>$x = expr1 ? expr2 : expr3</td>
      <td>Returns the value of $x.
      The value of $x is expr2 if expr1 = TRUE.
      The value of $x is expr3 if expr1 = FALSE</td>
   </tr>
   <tr>
      <td class="opera"><b>??</b></td>
      <td>Null coalescing</td>
      <td>$x = expr1 ?? expr2</td>
      <td>Returns the value of $x.
      <br>The value of $x is expr1 if expr1 exists, and is not NULL.
      If expr1 does not exist, or is NULL, the value of $x is expr2. <br>
      Introduced in PHP 7</td>
   </tr>
   </table>

   <pre>
   Exmplo <b>( ? : )</b>
   &lt;<b>?php</b>
      // if empty($user) = TRUE, set $status = "&lt;<b>p</b>>anonymous&lt;<b>/p</b>>"
      echo $status = (empty($user)) <b>?</b> "&lt;<b>p</b>>anonymous&lt;<b>/p</b>>" <b> : </b> 
      "&lt;<b>p</b>>logged in&lt;<b>/p</b>>";

      $user = "John Doe";
      // if empty($user) = FALSE, set $status = "logged in"
      echo $status = (empty($user)) <b> ? </b> "anonymous" <b> : </b> "logged in";
   <b>?</b>></pre>

   <h3>Resultado do programa acima</h3>
   
   <?php
      // if empty($user) = TRUE, set $status = "anonymous"
      echo $status = (empty($user)) ? "<p>anonymous</p>" : "<p>logged in</p>";

      $user = "John Doe";
      // if empty($user) = FALSE, set $status = "logged in"
      echo $status = (empty($user)) ? "<p>anonymous</p>" : "<p>logged in</p>";
   ?>
   <hr>

   <pre>
   Exmplo <b>( ?? )</b>
   &lt;<b>?php</b>
      // variable $user is the value of $_GET['user']
      // and 'anonymous' if it does not exist
      echo $user = $_GET["user"] <b>??</b> "&lt;<b>p</b>>anonymous&lt;<b>/p</b>>";
   
      // variable $color is "red" if $color does not exist or is null
      echo $color = $color <b>??</b> "&lt;<b>p</b>>red&lt;<b>/p</b>>";
   &lt;<b>?</b>></pre>

   <h3>Resultado do prograa acia</h3>

   <?php
      // variable $user is the value of $_GET['user']
      // and 'anonymous' if it does not exist
      echo $user = $_GET["user"] ?? "<p>anonymous</p>";
   
      // variable $color is "red" if $color does not exist or is null
      echo $color = $color ?? "<p>red</p>";
   ?>
   <hr>

</body>
</html>