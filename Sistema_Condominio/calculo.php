<?php

if(isset($_POST['cemig']))
$cemig = $_POST[''];
else
$cemig = 0;

if(isset($_POST['copasa']))
$copasa = $_POST['copasa'];
else
$copasa = 0;


if(isset($_POST['limpeza']))
$limpeza = $_POST['limpeza'];
else
$limpeza = 0;


if(isset($_POST['tarifa']))
$tarifa = $_POST['tarifa'];
else
$tarifa = 0;

if(isset($_POST['outros']))
$outros = $_POST['outros'];
else
$outros = 0;

if(isset($_POST['quantidadeMoradores']))
$quantidadeMoradores = $_POST['quantidadeMoradores'];
else
$quantidadeMoradores = 0;

$resultado = ($cemig + $copasa + $limpeza + $tarifa + $outros) / $quantidadeMoradores;

header("Location: index.php?resultado=".$resultado);
?>