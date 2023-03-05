<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>If If_Else If_Else_If</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <h1>If - If_Else - If_ElseIf</h1>

   <p>As instruções condicionais são usadas para executar ações diferentes com base em condições diferentes.</p>

   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam est, provident fuga ea, obcaecati nobis numquam laborum repellendus vero minima consequatur exercitationem harum cupiditate, nulla impedit incidunt. Eos, id quia?</p>

   <h2>Instruções condicionais</h2>

   <p>Muitas vezes, quando se escreve códigos, deseja-se executar ações diferentes para condições diferentes. Podemos usar instruções condicionais no código para fazer isso.</p>

   <p>Temos as seguintes instruções condicionais:</p>

   <ul>
      <li>Instrução <mark>( if )</mark> - executa algum código se uma condição for verdadeira</li>

      <li> Instrução <mark>( if...else )</mark> - executa algum código se uma condição for verdadeira e outro código se essa condição for falsa</li>
      
      <li>Instrução <mark>( if...elseif...else )</mark> - executa códigos diferentes para mais de duas condições</li>
      
      <li>Instrução <mark>( switch...case )</mark> - seleciona um dos muitos blocos de código a serem executados</li>
   </ul>
   <hr>
   
   <h2>A instrução <mark> if </mark></h2>

   <p>A instrução <mark> if </mark> executa algum código se uma condição for verdadeira.</p>

   <h3>Sintaxe</h3>
   
   <pre>
   <mark> if </mark> (condição) {
      O código será executado 
      se a condição for verdadeira;
   }</pre>

   <h3>Exemplo</h3>

   <p>Saída "Tenha um bom dia!" se a hora atual (HORA) for inferior a 20:</p>
   
   <pre>
   &lt;<b>?php</b>
   <mark>$t</mark> = date("H");
      
   // se $t menor que 20
   <mark> if </mark> (<mark>$t</mark> < "20") {
      // exiba
      echo "Tenha um bom dia!";
   }
   <b>?</b>></pre>

   <?php
      $t = date("H");
      echo "<p>Hora = $t</p>";   

      // se $t menor que 20
      if  ($t < "20") {
         //exiba
         echo "<p>Tenha um bom dia!</p>";
      }
   ?>
   <hr>   

   <h2>A instrução <mark>if...else</mark></h2>

   <p>A instrução <mark>if...else</mark> executa algum código se uma condição for verdadeira, se não, executa o outro código.</p>

   <h3>Sintaxe</h3>

   <pre>
   <mark> if </mark> (condição) {
      O código será executado 
      se a condição for verdadeira;
   }
   <mark>else</mark> {
      O código será executado 
      se a condição for falsa;
   }</pre>

   <h3>Exemplo</h3>

   <p>Saída "Tenha um bom dia!" se a hora atual (HORA) for inferior a 20, se for falso a sáida será "Tenha uma boa noite!":</p>
   
   <pre>
   &lt;<b>?php</b>
   // variável
   <mark>$t</mark> = date("H");
   // exibir
   echo "&lt;<b>p</b>>HORA = $t&lt;<b>/p</b>>";

   // se $t menor que 20
   <mark> if </mark> (<mark>$t</mark> < "20") {
      // exiba
      echo "&lt;<b>p</b>>Tenha um bom dia!&lt;<b>/p</b>>";
   }
   <mark>else</mark> { // se não
      // exiba
      echo "&lt;<b>p</b>>Tenha uma boa noite!&lt;<b>/p</b>>";
   }
   <b>?</b>></pre>

   <?php
   // variável
   $t = date("H");
   // exibir
   echo "<p>HORA = $t</p>";

   // se $t menor que 20
    if  ($t < "20") {
      // exiba
      echo "<p>Tenha um bom dia!</p>";
   }
   else { // se não
      // exiba
      echo "<p>Tenha uma boa noite!</p>";
   }
   ?>
   <hr>
   
   <h2>A instrução <mark>if...elseif...else</mark></h2>

   <p>A instrução <mark> if...elseif...else </mark> executa o primeiro código se a condição1 for verdadeira, ou executa o segundo código se a condição2 for verdadeira, se não, executa o último código se as condições forem falsas.</p>

   <h3>Sintaxe</h3>
   
   <pre>
   <mark> if </mark> ( condição1 ) {
      O código será executado 
      se a condição1 for verdadeira;
   }
   <mark>elseif ( condição2 )</mark> {
      O código será executado 
      se a condição1 for falsa,
      e a condição2 for verdadeira;
   }
   <mark>else</mark> {
      O código será executado 
      se a condição1 e a condição2
      forem falsas;
   }</pre>

   <h3>Exemplo</h3>

   <p>Saída "Tenha um lindo dia!" se a hora atual for inferior a 10, e "Tenha um bom dia!" se o tempo atual for inferior a 20. Caso contrário, saída "Tenha uma boa noite!":</p>

   <pre>
   &lt;<b>?php</b>
   // variável
   <mark>$t</mark> = date("H");
   // exibir
   echo "&lt;<b>p</b>>HORA = $t&lt;<b>/p</b>>";

   // se $t menor que 10
   <mark> if </mark> (<mark>$t</mark> < "10") {
      // exiba
      echo "&lt;<b>p</b>>Tenha uma lindo dia!&lt;<b>/p</b>>";
   }
   <mark>elseif</mark> (<mark>$t</mark> < "20") { // se $t menor que 20
      // exiba
      echo "&lt;<b>p</b>>Tenha um bom dia!&lt;<b>/p</b>>";
   }
   <mark>else</mark> { // se não
      // exiba
      echo "&lt;<b>p</b>>Tenha uma boa noite!&lt;<b>/p</b>>";
   }
   <b>?</b>></pre>
   <?php
   // variável
   $t = date("H");
   // exibir
   echo "<p>HORA = $t</p>";

   // se $t menor que 10
    if  ($t < "10") {
      // exiba
      echo "<p>Tenha uma lindo dia!</p>";
   }
   elseif ($t < "20") { // se $t menor que 20
      // exiba
      echo "<p>Tenha um bom dia!</p>";
   }
   else { // se não
      // exiba
      echo "<p>Tenha uma boa noite!</p>";
   }
   ?>
   <hr>
   
</body>
</html>