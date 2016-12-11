<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>process</title>
  </head>
  <body>
    <?php

      use Symfony\Component\Process\Process;
      use Symfony\Component\Process\Exception\ProcessFailedException;

      $processo = new Process('ls');
      //criando um processo para listar conteúdos de uma pasta
      $processo->run();
      //roda o processo

      if (!$processo->isSuccessful()) {
        throw new ProcessFailedException($process);
        //verificando se não ocorreu algum erro
        //essa verificação ocorre após o término da execução do processo
      }

      echo $processo->getOutput();
      // imprime o resultado do processo

    ?>
  </body>
</html>
