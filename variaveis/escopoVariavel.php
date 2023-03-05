<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Escopo de variável</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <h1>Escopo de variáveis PHP</h1>

   <p>No PHP, as variáveis podem ser declaradas em qualquer lugar do script.</p>

   <p>O escopo de uma variável é a parte do script onde a variável pode ser referenciada/usada.</p>

   <p>PHP tem três escopos variáveis diferentes:</p>
   <ul>
      <li>local</li>
      <li>global</li>
      <li>estático</li>
   </ul>

   <h2>Escopo Global e Local</h2>

   <p>Uma variável declarada <strong>fora</strong> de uma função tem um <ins>ESCOPO GLOBAL</ins> e só pode ser acessado fora de uma função:</p>
   <pre>
   Exemplo
      Variável com escopo global:
   &lt;?php
      <b>$x</b> = 5; // variável global

   function myTest() {
      <b>$x</b> = 10; // declara que x vale 10 excopo interno
      // usando x dentro desta função vai causar um  erro.
      echo "<b>&lt;p></b> x dentro da função vale: <b>$x &lt;p></b>";
   }
         myTest();

      echo "<b>&lt;p></b>Variable x outside function is: <b>$x</b> <b>&lt;p></b>";
   ?></pre>
   <hr>

   <h3>Resultado do programa acima</h3>
   
   <?php
      $x = 5; // variável global

      function myTest() {
      $x = 10; // declara que x vale 10 excopo interno
      // usando x dentro desta função vai causar um  erro.
      echo "<p> x dentro da função vale: <b>$x</b> <p>"; 
      }
   
      myTest(); // cha

      echo " <p>A Variável x fora da função vale: <b>$x</b> <p>";
   ?>
   <hr>

   <p>Uma variável declarada <strong>dentro</strong> de uma função tem um <ins>ESCOPO LOCAL</ins> e só pode ser acessado dentro dessa função:</p>
   <pre>
   Exemplo
       Variável com escopo local:
   &lt;?php
      // não existe variável global
   function myTest2() {
      <b>$x</b> = 5; // local scope
      echo "<b>&lt;p></b>A Variável x dentro da function é: <b>$x</b> <b>&lt;/p></b>";
   }

   myTest2();

   // usando x fora da function vai gerar um erro.
   // não existe variável global
   echo "<b>&lt;p></b>A Variávle x fora da function é: <b>$x</b> <b>&lt;/p></b>";
   ?></pre>
   
   <p>Você pode ter variáveis locais com o mesmo nome em diferentes funções, porque as variáveis locais só são reconhecidas pela função em que a estão Declarado.</p>
   <hr>
   
   <h3>Resultado do programa acima</h3>
   
   <?php
   function myTest2() {
      $x = 5; // local scope
      echo "<p>A Variável x dentro da function é: <b>$x</b> </p>";
   }

   myTest2();

   // usando x fora da function vai gerar um erro.
   // não existe variável global
   echo "<p>A Variávle x fora da function é: <b>$x</b> </p>";
   ?>
   <hr>

   <h2>PHP A palavra-chave global</h2>

   <p>A palavra-chave <mark>global</mark> é usada para acessar uma variável global de dentro de uma função.</p>

   <p>Para fazer isso, use a palavra-chave <mark>global</mark> antes das variáveis (dentro do função):</p>

   <pre>
   Exemplo
   <b>&lt;?php</b>
   // variáveis global
   $x = 5;
   $y = 10;

   function myTest3() {
      <b>global</b> $x, $y;
      $y = $x + $y; // soma x e y
   }

   myTest3();
   echo "<b>&lt;p></b>A soma de x e y é <b>$y</b> <b>&lt;/p></b>"; // exibe 15
   <b>?></b></pre>

   <h3>Resultado do programa acima</h3>
   
   <?php
   // variáveis global
   $x = 5;
   $y = 10;

   function myTest3() {
      global $x, $y;
      $y = $x + $y; // soma x e y
   }

   myTest3();
   echo "<p>A soma de x e y é <b>$y</b> </p>"; // exibe 15
   ?>
   <hr>

   <p>O PHP também armazena todas as variáveis globais em uma matriz chamada . O <mark>índice</mark> contém o nome da variável. Esse array também pode ser acessado a partir de dentro de funções e pode ser usado para atualizar variáveis globais diretamente. <mark>$GLOBALS[index]</mark></p>
   
   <p>O exemplo acima pode ser reescrito assim:</p>
   <pre>
   Exemplo
   <b>&lt;?php</b>
   $x = 5;
   $y = 10;

   function myTest4() {
   <mark>$GLOBALS</mark>['y'] = <mark>$GLOBALS</mark>['x'] + <mark>$GLOBALS</mark>['y'];
   }

   myTest();

   echo "<b>&lt;p></b>A soma de x e y é <b>$y</b> <b>&lt;/p></b>"; // exibe 15
   <b>?></b></pre>

   <h3>Resultado do programa acima</h3>
   
   <?php
   $x = 5;
   $y = 10;

   function myTest4() {
   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
   }

   myTest4();

   echo "<p>A soma de x e y é <b>$y</b> </p>"; // exibe 15
   ?>
   <hr>

   <h2>PHP A palavra-chave estática</h2>

   <p>Normalmente, quando uma função é concluída/executada, todas as suas variáveis são excluídas. No entanto, às vezes queremos que uma variável local NÃO seja excluída. Precisamos dela para um mais trabalho.</p>

   <p>Para fazer isso, use a palavra-chave <mark>static</mark> quando você declarar pela primeira vez o variável:</p>
   <pre>
   Exemplo
   <b>&lt;?php</b>
      function myTest5() {
         <mark>static</mark> $x = 0;
         echo "<b>&lt;p></b>A Variável x dentro da function é: <b>$x</b> <b>&lt;/p></b>
         $x++;
      }

      myTest5();
      myTest5();
      myTest5();
   <b>?></b></pre>

   <h3>Resultadp do programa acima</h3>

   <?php
      function myTest5() {
         static $x = 0;
         echo "<p>A Variável x dentro da function é: <b>$x</b> </p>";
         $x++;
      }
      myTest5();
      myTest5();
      myTest5();
   ?>

   <p>Então, cada vez que a função for chamada, essa variável ainda terá o informações que continha da última vez que a função foi chamada.</p>

   <p><mark>Nota:</mark> A variável ainda é local para a função.</p>
   <hr>

</body>
</html>