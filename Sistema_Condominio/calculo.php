<?php
session_start();
require_once("lib/funcoes.php");

date_default_timezone_set("America/Sao_Paulo");

$cemig = 0;
$data = date("Y-m-d");
$copasa = 0;
$limpeza = 0;
$tarifa = 0;
$outros = 0;
$quantidadeMoradores = 0;

if(isset($_POST['data']))
$data =  date("Y-m-d", strtotime($_POST['data']));

if(isset($_POST['cemig']))
$cemig = $_POST['cemig'];

if(isset($_POST['copasa']))
$copasa = $_POST['copasa'];

if(isset($_POST['limpeza']))
$limpeza = $_POST['limpeza'];

if(isset($_POST['tarifa']))
$tarifa = $_POST['tarifa'];

if(isset($_POST['outros']))
$outros = $_POST['outros'];

if(isset($_POST['quantidadeMoradores']))
$quantidadeMoradores = $_POST['quantidadeMoradores'];

$resultado = ($cemig + $copasa + $limpeza + $tarifa + $outros) / $quantidadeMoradores;

if(cadastrar($cemig,$copasa,$limpeza,$tarifa,$outros,$quantidadeMoradores,$data)){
    $_SESSION['alerta'] = '<div class="alert alert-success" role="alert">
    Eba! Cadastrado com sucesso!
  </div>';
    header("Location: resultado.php");
}
else
{
    $_SESSION['alerta'] = '<div class="alert alert-danger" role="alert">
    Ops! Não conseguimos cadastrar!
  </div>';
    header("Location: resultado.php");
}



?>