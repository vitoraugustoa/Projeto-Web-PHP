<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container my-5 ">

<?php require_once("shared/header.php"); ?>

<?php
            if(isset($_SESSION['alerta'])){
               echo $_SESSION['alerta'];
               unset($_SESSION['alerta']);
            }
         ?>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Voltar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="listar.php" tabindex="-1" aria-disabled="true">Ver Historico</a>
  </li>
</ul>
</div>


</body>
<?php require_once("shared/footer.php"); ?>
</html>