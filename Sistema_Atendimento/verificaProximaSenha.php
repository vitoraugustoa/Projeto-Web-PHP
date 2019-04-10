<?php
require_once("lib/funcoes.php");


$query = "SELECT count(codAtende) as nLinhas FROM atende WHERE statusAtende = 'AGUARDANDO ATENDIMENTO'  order by codAtende ASC LIMIT 1";
              
  $resultado = conecta($query);
      $contador = 0;
      while($linha=mysql_fetch_array($resultado))
      { 
        $contador = $linha['nLinhas'];
      }

      echo $contador;

?>