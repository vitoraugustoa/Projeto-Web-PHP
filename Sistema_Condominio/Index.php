<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sistema de Condominio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container my-5 ">
      <?php require_once("shared/header.php"); ?>

      <div class="row border center  border-dark rounded">
        <div class="col-3 p-5">
          <form class="align-middle" method="post" action="calculo.php">
            <div class="form-group">
              <label for="">Data</label>
              <input
                type="date"
                class="form-control"
                id=""
                name="data"
                placeholder="Data "
              />
            </div>
            <div class="form-group">
              <label for="">Cemig</label>
              <input
                type="number"
                class="form-control"
                id=""
                name="cemig"
                placeholder="Valor Cemig"
              />
            </div>
            <div class="form-group">
              <label for="">Copasa</label>
              <input
                type="number"
                class="form-control"
                id=""
                name="copasa"
                placeholder="Valor Copasa"
              />
            </div>
            <div class="form-group">
              <label for="">Limpeza do predio</label>
              <input
                type="number"
                class="form-control"
                id=""
                name="limpeza"
                placeholder="Valor Limpeza"
              />
            </div>
            <div class="form-group">
              <label for="">Tarifa bancaria</label>
              <input
                type="number"
                class="form-control"
                id=""
                name="tarifa"
                placeholder="Valor Tarifa"
              />
            </div>
            <div class="form-group">
              <label for="">Outros</label>
              <input
                type="number"
                class="form-control"
                id=""
                name="outros"
                placeholder="Valor Outros"
              />
            </div>

            <div class="form-group">
              <label for="">Quantidade de moradores</label>
              <select name="quantidadeMoradores" class="form-control">
                <?php
                     for ($i=1; $i <= 20; $i++){
                        ?>
                <option value="<?=$i?>"><?=$i?></option>
                <?php
                     }
                     ?>
              </select>
            </div>

            <button type="submit" class="btn btn-dark">
              Calcular <i> </i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>

  <?php require_once("shared/footer.php"); ?>
</html>
