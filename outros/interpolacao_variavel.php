<?php
/*
   O progama mostra a interpolação das variáveis.
   ou seja, mostra a inclusão dos valores das variáveis dentro de outras variáveis.
*/
   // variáveis
   $time = "Grêmio";
   $ano = 1983;

   // interpolação do valor da variável $time sendo incluida na string da variável $frase1
   $frase1 = "O $time é o melhor time do futbol do mundo!";

   // interpolação dos valores das variáveis $time e $ano sendo incluido na variável $frase2
   $frase2 = "O $time foi campeão do mundo em $ano";

   //exibi as variáveis frase1 e 2, com os valores de outras variáveis
   echo "<h3>$frase1</h3>";
   echo "<h3>$frase2</h3>";