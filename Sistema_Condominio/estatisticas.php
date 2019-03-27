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

    <?php require_once("shared/header.php"); ?>


    <section class="align-middle">

    <div class="row">

      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Mês Maior Conta de Agua</h5>
          </div>
          <div class="card-body">
              <?php
              // SELECT MONTH(data_cadastro) FROM `condominio` order by copasa DESC LIMIT 1
              $query1 = "SELECT MONTH(data_cadastro) as data FROM condominio WHERE copasa IN (SELECT MAX(copasa) FROM condominio)";
              $resultado1 = conecta($query1);
              if(mysql_num_rows($resultado1) > 0){
                  while($linha=mysql_fetch_array($resultado1))
                  {
            ?>
            <p class="card-text"><?= $linha["data"]; ?></p>
            <?php
                  }
                }
            ?>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Mês com Menor Conta de Agua</h5>
          </div>
          <div class="card-body">
          <?php
              // SELECT MONTH(data_cadastro) FROM `condominio` order by copasa ASC LIMIT 1
              $query1 = "SELECT MONTH(data_cadastro) as data FROM condominio WHERE copasa IN (SELECT MIN(copasa) FROM condominio)";
              $resultado1 = conecta($query1);
              if(mysql_num_rows($resultado1) > 0){
                $linha=mysql_fetch_array($resultado1)
                
            ?>
            <p class="card-text"><?= $linha["data"]; ?></p>
            <?php
                
                }
            ?>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Mês com Maior Conta de Luz</h5>
          </div>
          <div class="card-body">
          <?php
              // SELECT MONTH(data_cadastro) FROM `condominio` order by cemig DESC LIMIT 1
              $query1 = "SELECT MONTH(data_cadastro) as data FROM condominio WHERE cemig IN (SELECT MAX(cemig) FROM condominio)";
              $resultado1 = conecta($query1);
              if(mysql_num_rows($resultado1) > 0){
                $linha=mysql_fetch_array($resultado1);
                  
            ?>
            <p class="card-text"><?= $linha["data"]; ?></p>
            <?php
                  
                }
            ?>
          </div>
        </div>
      </div>

    </div>


    <div class="row">

      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Mês com Menor Conta de Luz</h5>
          </div>
          <div class="card-body">
          <?php
              // SELECT MONTH(data_cadastro) FROM `condominio` order by cemig ASC LIMIT 1
              $query1 = "SELECT MONTH(data_cadastro) as data FROM condominio WHERE cemig IN (SELECT MIN(cemig) FROM condominio)";
              $resultado1 = conecta($query1);
              if(mysql_num_rows($resultado1) > 0){
              $linha=mysql_fetch_array($resultado1);
                  
            ?>
            <p class="card-text"><?= $linha["data"]; ?></p>
            <?php
                  
                }
            ?>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Media gastos do condiminio</h5>
          </div>
          <div class="card-body">
          <?php
              // SELECT MONTH(data_cadastro) FROM `condominio` order by cemig ASC LIMIT 1
              $query1 = "SELECT * FROM condominio WHERE MONTH(data_cadastro)";
              $resultado1 = conecta($query1);
              if(mysql_num_rows($resultado1) > 0){
                $cemig = 0;
                $copasa = 0;
                $limpeza = 0;
                $outros = 0;
                $tarifa = 0;
                $qtd = 0;
                while($linha=mysql_fetch_array($resultado1))
                {       

                  $cemig += $linha["cemig"];
                  $copasa += $linha["copasa"];
                  $limpeza += $linha["limpeza"];
                  $outros += $linha["outros"];
                  $tarifa += $linha["tarifa_bancaria"];
                  $qtd += $linha["qnt_moradores"];

                }

                $condominio = ($cemig + $copasa + $limpeza + $outros) / 12;
                $valorCondominio =  ($cemig + $copasa ) /$qtd;
                  ?>
                          <p class="card-text"><?= round($condominio,2)  ?></p>
                  <?php

             }
            ?>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Valor do condominio por morador</h5>
          </div>
          <div class="card-body">
            <p class="card-text"><?= round($valorCondominio, 2) ?></p>
          </div>
        </div>
      </div>

    </div>

  </div>
</body>

<?php require_once("shared/footer.php"); ?>
<script src="javascript/calculos.js"></script>

</html>