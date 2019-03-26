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

<?php require_once("shared/header.php");


if(isset($_SESSION['alerta'])){
  echo $_SESSION['alerta'];
  unset($_SESSION['alerta']);
}

?>

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
      <th scope="col">Valor Total do condominio</th>
      <th scope="col">Valor total das despesas</th>
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
    <tr class="linha">
      <td id="cemig" ><?= $linha['cemig']?></td>
      <td id="copasa" ><?= $linha['copasa']?></td>
      <td id="limpeza" ><?= $linha['limpeza']?></td>
      <td id="tarifaBancaria" ><?= $linha['tarifa_bancaria']?></td>
      <td id="outros" ><?= $linha['outros']?></td>
      <td id="divide" ><?= $linha['qnt_moradores']?></td>
      <td><?= $linha['data_cadastro']?></td>
      <td id="result-condominio"></td>
      <td id="result-despesas"></td>
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

<?php require_once("shared/footer.php"); ?>
<script src="javascript/calculos.js"></script>

</html>