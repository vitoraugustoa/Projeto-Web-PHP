<?php
require_once("lib/funcoes.php");
require_once("shared/header.php");

?>

<div class="row center aling-middle">
    <div class="col-6">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 text-center">Proxima Senha</h1>
               
                <?php
             $codigoSendoChamado = 0;
              $queryCodigo = "SELECT * FROM atende WHERE statusAtende = 'EM ATENDIMENTO'  order by codAtende DESC LIMIT 1";
              $codigoResultado = conecta($queryCodigo);
              if(mysql_num_rows($codigoResultado) > 0){
                while($codigo=mysql_fetch_array($codigoResultado)){
                    $codigoSendoChamado = $codigo["codAtende"];
                ?>
                <p class="lead text-center text-uppercase text-danger font-weight-bold">
                <?=$codigo["senhaAtende"] ?>
                </p>
                <?php
                     }         
                    }
                 ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 id="list-example" class="display-5 text-center">Proximas chamadas</h1>
                <div class="scroll">
                <ul class="list-group">
                <?php
              $query = "SELECT * FROM atende WHERE codAtende <> '$codigoSendoChamado' AND statusAtende = 'AGUARDANDO ATENDIMENTO' order by codAtende ASC ";
              $resultado = conecta($query);
              if(mysql_num_rows($resultado) > 0){
                  $contador = 0;
                  while($linha=mysql_fetch_array($resultado))
                  {
                      $contador++;
                ?>
                    <li class="text-center list-group-item text-uppercase text-danger font-weight-bold"><?= $contador .": ".$linha["senhaAtende"]?></li>
                    <?php
                         }
                       }
                    ?>
                  </ul>
                  </div>
            </div>
        </div>
    </div>
</div>


<?php 
  
header("Refresh: 1; url = fila.php");

require_once("shared/footer.php"); 


?>