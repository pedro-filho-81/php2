<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sintax PHP</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <h1>Sintaxe PHP</h1>
   <p>Um script PHP é executado no servidor e o resultado HTML simples é enviado de volta ao navegador.</p>

   <h2>Sintaxe PHP Básica</h2>

   <p>Um script PHP pode ser colocado em qualquer lugar do documento.</p>

   <p>Um script PHP começa com e termina com:<b>&lt;?php ... ?></b></p>
   <pre>
   &lt;?php
      // Seu código PHP aqui.
   ?></pre>

   <p>A extensão de arquivo padrão para arquivos PHP é "". <b>.php</b></p>

   <p>Um arquivo PHP normalmente contém tags HTML e algum código de script PHP.</p>

   <p>Abaixo, temos um exemplo de um arquivo PHP, com um script PHP que usa uma função PHP <b>echo</b> "<b>Olá Mundo!</b>" para saída do texto "Olá Mundo!" em uma página da web:</p>
   <pre>
   Exemplo
   &lt;h1>Minha primeira página PHP&lt;/h1>
   
   &lt;?php
      <b>echo</b> "<b>Olá Mundo!</b>";
   ?></pre>

   <p><b>Nota:</b> As instruções PHP terminam com um ponto-e-vírgula <b>( ; )</b>
   <hr>

   <h2>Sensibilidade a maiúsculas e minúsculas</h2>

   <p>Em PHP, palavras-chave (por exemplo, , , , , etc.), classes, funções, e as funções definidas pelo usuário não diferenciam maiúsculas de minúsculas. <b>if else while echo</b></p>

   <p>No exemplo abaixo, todas as três declarações de <b>echo</b> são iguais e legais:</p>
   <pre>
   Exemplo
   &lt;?php
      <b>ECHO</b> "Hello World!";
      <b>echo</b> "Hello World!";
      <b>EcHo</b> "Hello World!";
   ?></pre>

   <p><mark>Nota:</mark> Contudo; todos os nomes de variáveis diferenciam maiúsculas de minúsculas!</p>
   
   <h3>Resultado do exemplo acima</h3>
   <?php
      ECHO "<p>Hello World!</p>";
      echo "<p>Hello World!</p>";
      EcHo "<p>Hello World!</p>";
   ?>
   <hr>

   <p>Veja o exemplo abaixo; somente a primeira instrução exibirá o valor da variável! Isso ocorre porque elas são tratadas como três diferentes variáveis: <b>$color, $color, $COLOR, $coLOR</b></p>
   <pre>
   Exemplo
   &lt;?php
      $color = "red"; // variável

      echo "My car is " . <b>$color</b>;
      echo "My house is " . <b>$COLOR</b>; // erro variável não declarada
      echo "My boat is " . <b>$coLOR</b>; // erro variável não declarada
   ?></pre>

   <h3>Resultado do exemplo acima</h3>
   <?php
      $color = "red"; // variável

      echo "Meu carro é " . $color;
      echo "Minha casa é " . $COLOR; // erro: variável não declarada
      echo "Meu bote é " . $coLOR; // erro: variável não declarada
   ?>
   <hr>

</body>
</html>