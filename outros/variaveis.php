<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Variáveis no PHP</title>
   <style>
      body { /*Corpo*/
         background-color: yellow;
      }
      h1 { /*Principal*/
         text-align: center;
         background-color: red;
      }
      p { /*Parágrafo */
         color: blue;
      }
      strong { /*Destaque*/
         color: black;
      }
   </style>
</head>
<body>
   <h1>Variáveis no PHP</h1>

   <?php
      echo "<p>No PHP, uma variável é declarada usando um sinal \$ seguido pelo nome da variável, ou sinal \$ após sublinhado (_) e o nome da variável.</p>";

      echo "<p>PHP é uma linguagem vagamente tipada, não precisa declarar os tipos de dados das variáveis.</p>"; 

      echo "<p>Depois de declarar uma variável, ela pode ser reutilizada em todo o código.</p>";

      echo "<p>Operador de atribuição (=) é usado para atribuir o valor a uma variável. <br><strong>\$variavel = valor</strong></p>";

      echo "<p>A sintaxe para declarar uma variável em PHP é: <br><strong>\$nome_da_variavel = valor;</strong><br>ou sinal \$ e sublinhado (_) <br><strong>\$_nomeDaVariavel = valor;</strong></p>";

      echo "<p><strong>Valor</strong> pode ser: caracteres <strong>(a, b, c, ...  )</strong> ou cadeia de caracteres <strong>(\"Palavras\", \"frases\", ...)</strong>, números inteiros <strong>(1, 2, 3 ...)</strong>, reais <strong>(1.2, 123.25, ...)</strong> e simbolos <strong>(@, #, % ...)</strong></p>";

      echo "<p>Uma variável deve começar com um sinal de dólar (\$), seguido pelo nome da variável   <br><strong>(\$)nome_da_variavel = valor;</strong></p>";
      
     echo "<p>Um nome de variável não pode conter espaços: <strong>\$ nome da variavel = valor;</strong></p>";
      
     echo "<p>Não pode começar com um número ou símbolos especiais.<br><strong>\$21nome_da_variavel = valor;</strong><br><strong>\$@nome_da_variavel = valor;</strong></p>";
     
     echo "<p>As variáveis PHP diferenciam maiúsculas de minúsculas, de modo que <strong>\$name e \$NAME</strong> ambos são tratados como variáveis diferentes.</p>";
   ?>
</body>
</html>