<?php
   echo "<h1>Um Programa PHP</h1>";

   echo "<h2>Estrutura do Código PHP</h2>";

   echo "<p>Normalmente um programa PHP tem a extensão .php</p>";

   echo "O código escrito em PHP começa depois de <code>< ?php</code>";
   
   echo "<pre>
      < ?php Abre o bloco de código PHP 

         seu código aqui;
         outro código aqui;
         aqui também;
      
         ?> Fecha o bloco de código PHP
   </pre>";

   echo "<hr/>";

   echo "<h2>Comentarios</h2>";
   
   echo "<pre>
   < ?php
      Barra-barra
      // este é um comentário de um linha estilo C++

      Barra asterisco abre o bloco do comentário de várias linha.
      /* 
         Este é um comentário de
         de várias linhas
         serve para grandes esplicações
         como essa.
      */ 
      Asterisco barra fecha o comentário de várias linhas

      # este é um comentário de uma linha no estilo shell.
   ?>
   </pre>";
   echo "<hr>";

   echo "<h2>Comandos de Saída em PHP echo/print</h2>";

   echo "<p>Os comandos para exibir coisas na tela do computador são <code>echo/print</code></p>";

   echo "<pre>
   < ?php
      echo \"Esta frase vai ser vista na tela\";

      print \"Esta frase vai ser vista na tela\";
   ?>
   </pre>";
   echo "<hr>";

   echo "<h2>Função var_damp</h2>";

   echo "<p><code>Var_damp</code> é uma função que imprime o conteúdo de uma variável de forma <br> detalhada, muito comum para executar um debug.</p>";

   echo "// cria e atribui valores ao vetor:<br/>\$vetor = array('Paulo', 'Carla', 'Pedro', 'carro');";
   
   echo "<p># chama a função var_damp:<br>var_dump(\$vetor);</p>";

   // cria vetor
   $vetor = array('Paulo', 'Carla', 'Pedro', 'carro');

   // chama a função var_damp para analizar o vetor.
   var_dump($vetor);

   //array(4) { [0]=> string(5) "Paulo" [1]=> string(5) "Carla" [2]=> string(5) "Pedro" [3]=> string(5) "carro" }
   echo "<p>Exibe detalhe do do vetor, tais como Tipo do vetor, posição, valor.</p>";
   
   echo "<pre>
   Sáida:
   array(4) { [0]=> string(5) \"Paulo\"
              [1]=> string(5) \"Carla\"
              [2]=> string(5) \"Pedro\"
              [3]=> string(5) \"carro\" 
            }
   </pre>";
   echo "<hr>";