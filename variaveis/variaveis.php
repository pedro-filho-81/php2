<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Variáveis</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <h1>Variáveis PHP</h1>

   <p>As variáveis são "contêineres" para armazenar informações.</p>

   <h2>Criando (declarando) variáveis PHP</h2>

   <p>No PHP, uma variável começa com o sinal de <b>( $ )</b>, seguido pelo nome da variável:
   <pre>
   Exemplo
   &lt;?php
      // variáveis
      <b>$txt</b> = "Hello world!"; // string
      <b>$x</b> = 5; // inteiro
      <b>$y</b> = 10.5; // float ou double
   ?></pre>
   
   <p>Após a execução das instruções acima, a variável $txt manterá o valor, a variável $x manterá o valor, e a variável $y manterá o valor. <br> <b>$txt = "Hello world!";</b> <br> <b>$x = 5;</b> <br> <b>$y = 10.5;</b></p>

   <p><mark>Nota:</mark> Ao atribuir um valor de texto a uma variável, coloque aspas ao redor do valor.</p>

   <p><mark>Nota:</mark> Ao contrário de outras linguagens de programação, PHP não tem comando para declarar uma variável. Ele é criado no momento em que você atribui um valor pela primeira vez a ela.</p>

   <p>Pense em variáveis como contêineres para armazenar dados.</p>
   <hr>

   <h2>Variáveis PHP</h2>

   <p>Uma variável pode ter um nome curto (como <b>x</b> e <b>y</b>) ou um nome mais descritivo (<b>idade</b>, <b>carname</b>, <b>total_volume</b>).</p>

   <h3>Regras para variáveis PHP:</h3>

   <ul>
      <li>Uma variável começa com o sinal <b>( $ )</b>, seguido pelo nome da variável</li>
      <li>Um nome de variável deve começar com uma letra ou o caractere de sublinhado <b>( _ )</b></li>
      <li>Um nome de variável não pode começar com um número</li>
      <li>Um nome de variável só pode conter caracteres alfanuméricos e sublinhados <b>(A-z, 0-9 e _ )</b>  </li>
      <li>Os nomes das variáveis diferenciam maiúsculas de minúsculas ( e são duas variáveis diferentes) <b>$age, $AGE</b></li>
      <li>Lembre-se de que os nomes das variáveis PHP diferenciam maiúsculas de minúsculas!</li>
   </ul>
   <hr>

   <h2>Variáveis de saída</h2>

   <p>A instrução PHP <b>( echo )</b> é frequentemente usada para gerar dados para a tela.</p>

   <p>O exemplo a seguir mostrará como produzir texto de uma variável:</p>

   <pre>
   Exemplo
   <b>&lt;?php</b>
      $txt = <b>"W3Schools.com"</b> ;
      echo <b>"I love $txt!"</b> ;
   ?></pre>
   <hr>

   <p>O exemplo a seguir produzirá a mesma saída que o exemplo acima:</p>
   <pre>
   Exemplo
   <b>&lt;?php</b>
   $txt = <b>"W3Schools.com"</b> ;
   echo <b>"I love "</b> . $txt . <b>"!"</b>;
   <b>?></b></pre>
   <hr>

   <p>O exemplo a seguir produzirá a soma de duas variáveis:</p>
   <pre>
   Exemplo
   <b>&lt;?php</b>
      $x = 5;
      $y = 4;
      echo $x + $y;
   <b>?></b></pre>
   <hr>

   <h2>PHP é uma linguagem vagamente tipada</h2>

   <p>No exemplo acima, observe que não tivemos que dizer ao PHP qual tipo de dados da variável é.</p>

   <p>O PHP associa automaticamente um tipo de dados à variável, dependendo do seu valor. Como os tipos de dados não são definidos em sentido estrito, você pode fazer coisas como adicionando uma cadeia de caracteres a um inteiro sem causar um erro.</p>

   <p>A partir do PHP 7, declarações de tipo foram adicionadas. Isso dá uma opção para especificar o tipo de dados esperado ao declarar uma função e, ao habilitar o requisito estrito, ele lançará um " <b>Fatal Erro</b>" em uma incompatibilidade de tipos.</p>
   <hr>

</html>