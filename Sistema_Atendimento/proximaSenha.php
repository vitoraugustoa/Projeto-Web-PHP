<?php
require_once("lib/funcoes.php");

$codigoSendoChamado = 0;
$senhaAtende = 0;

$query = "SELECT codAtende,senhaAtende FROM atende WHERE statusAtende = 'AGUARDANDO ATENDIMENTO'  order by codAtende ASC LIMIT 1";             
$resultado = conecta($query);
while($linha=mysql_fetch_array($resultado))
{ 
  $codigoSendoChamado = $linha['codAtende'];
  $senhaAtende = $linha["senhaAtende"];
}

if($resultado){
  $queryProxima = "UPDATE atende SET statusAtende = 'EM ATENDIMENTO' WHERE codAtende = $codigoSendoChamado";
  $resultadoProximo = conecta($queryProxima);

  if($resultadoProximo){
    echo $senhaAtende;
  }
  else
  {
    echo 0;
  }
}

?>