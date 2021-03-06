<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Avaliação - Autenticação</title>
   
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Fonts Icons -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="public/styles/styles.css">

  </head>


  <body class="text-center">
        
<form class="form-signin"  action="utils/autentica.php" method="POST">
        <?php
        if(isset($_SESSION['Alerta'])){
            echo $_SESSION['Alerta'];
            unset($_SESSION['Alerta']);
        }
      ?>
  <!-- <img class="mb-4" src="public/images/login.png" alt="" > -->
  <div class="imagem">
        
  </div>
  <h1 class="h6 mb-3 font-weight-normal">Favor efetuar o login!</h1>
  <label for="inputEmail" class="sr-only">Usuário</label>
  <input  id="inputEmail" class="form-control" name="usuario" placeholder="Usuário" required autofocus>
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required>

  <button class="btn btn-lg btn-secondary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy;Vitor Lopes 2019</p>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="public/javascript/util.js"></script>
</body>
</html>