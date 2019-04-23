<?php
    session_start();
    if(!isset($_SESSION['Logado'])){
        $_SESSION['Alerta'] = '
        <div id="close">
        <i class="fas fa-frown"></i>
        <div class="alert alert-warning" role="alert">
            Favor Efetuar o login!
            <button type="button" onclick="closediv()" class="close">
                            <span aria-hidden="true">&times;</span>
                     </button>
        </div>
        </div> ';
        header("location: index.php");
    }
?>
<!DOCTYPE html>
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
<body>
    <section class="form-signin">
    <i class="far fa-grin-beam"></i>
    <div class="alert alert-success" role="alert">
         Usuário Logado com sucesso!
    </div>
    <form  action="utils/desloga.php" method="POST">
    <button class="btn btn-lg btn-secondary btn-block" type="submit">Deslogar</button>
    </form>
    </section>

</body>
</html>