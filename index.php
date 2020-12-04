<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf=8">
      <title>Formulário de inscrição</title>
      <meta name="author" content="">
      <meta name="description" content="">
      <meta name="viewport" content="widtch=device-widtch, initial-scale=1">
  </head>
  <body>
  <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
  <form action="script.php" method="post">
   
   <?php
       $MensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
       if(!empty($MensagemDeSucesso))
       {
           echo $MensagemDeSucesso;
       }

      $MensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
      if(!empty($MensagemDeErro))
      {
          echo $MensagemDeErro;
      }
   ?>
   
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Sua idade: <input type="text" name="idade" /></p>
    <p><input type="submit" value='Enviar dados do competidor' /></p>
  </form>
  </body>
</html>
