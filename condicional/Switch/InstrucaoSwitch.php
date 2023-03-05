<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Instrução Switch</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Instrução <mark>( switch )</mark></h1>

   <p>A instrução <mark>switch</mark> é usada para executar ações diferentes com base em condições diferentes.</p>

   <p>Use a instrução para selecionar um dos muitos blocos do código a ser executado.</p>

   <h3>Sintaxe</h3>
   <pre>
   switch ( <mark>opcao</mark> ) {
   case 1:
      Esse código será executado se opcao = 1;
      break;
   case 2:
      Esse código será executado se opcao = 2;
      break;
   case 3:
      Esse código será executado se opcao = 3;
      break;
      ...
   default:
      Esse código será executado se a <mark>opcao</mark>
      for diferente de todas acima.
      break; // a instrução <mark>break</mark> aqui é opicional
   }</pre>
   
   <p>É assim que funciona: Primeiro temos uma única expressão <mark>opcao</mark> (na maioria das vezes ), que é avaliada uma vez. O valor da expressão é então comparado com os valores para cada caso na estrutura. Se houver uma correspondência, o bloco do código associado a esse caso é executado. Use ( <mark>break</mark> ) para impedir que o código de execução no próximo caso automaticamente. A instrução ( <mark>default</mark> ) é usada se nenhuma opcao for encontrada.</p>
   <pre>
   Exemplo
   &lt;<b>?php</b>
   <strong>$favcolor =</strong> <mark>"vermelho"</mark>;

   switch (<strong>$favcolor</strong>) {
   case <mark>"vermelha"</mark>:
      echo <mark>"Sua cor favorita é vermelho!"</mark>;
      break;
   case <mark>"azul"</mark>:
      echo <mark>"Sua cor favorita é azul!"</mark>;
      break;
   case <mark>"verde"</mark>:
      echo <mark>"Sua cor favorita é verde!"</mark>;
      break;
   default:
      echo <mark>"Sua cor favorita  não é vermelho, nem azul,
               nem verde!"</mark>;
   }
   <b>?</b>> </pre>

   <h3>Resultado do programa acima</h3>
   
   <?php
   $favcolor = "vermelho";

   switch ($favcolor) {
   case "vermelho":
      echo "<p>Sua cor favorita é vermelho!</p>";
      break;
   case "azul":
      echo "<p>Sua cor favorita é azul!</p>";
      break;
   case "verde":
      echo "<p>Sua cor favorita é verde!</p>";
      break;
   default:
      echo "<p>Sua cor favorita  não é vermelha, nem azul, nem verde!</p>";
   }
   ?> 
   <hr>

</body>
</html>