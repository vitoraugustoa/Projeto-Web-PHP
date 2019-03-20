<?php
    session_start();
    require_once("lib/funcoes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container my-5 ">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Cemig</th>
      <th scope="col">Copasa</th>
      <th scope="col">Limpeza</th>
      <th scope="col">Tarifa Bancaria</th>
      <th scope="col">Outros</th>
      <th scope="col">Quantidade Moradores</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $query = "SELECT * FROM condominio";
    $resultado = conecta($query);
    if(mysql_num_rows($resultado) > 0){
        while($linha=mysql_fetch_array($resultado))
        {
  ?>
    <tr>
      <th><?= $linha['cemig']?></th>
      <td><?= $linha['copasa']?></td>
      <td><?= $linha['limpeza']?></td>
      <td><?= $linha['tarifa_bancaria']?></td>
      <th><?= $linha['outros']?></th>
      <td><?= $linha['qnt_moradores']?></td>
      <td><?= $linha['data_cadastro']?></td>
    </tr>
    <?php
    }
}

  ?>

<li class="nav-item">
    <a class="nav-link" href="index.php">Voltar</a>
  </li>
  </tbody>
</table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>