<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP no HTml</title>
</head>
<body>
   <h1 align= 'center'>PHP no HTml</h1>
   <hr>
   <?php
      // variável vai ser chamado no paragráfo html
      $data_de_hoje = date("d/m/Y", time() );
   ?>
   <!-- chama a variável $data_de_hoje dentro do paragráfo html
   usando a tag < ?php ?> -->
   <p align= 'center'>Hoje é dia <?php echo "$data_de_hoje"?> </p>

</body>
</html>