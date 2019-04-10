<?php 
require_once("lib/funcoes.php");
date_default_timezone_set("America/Sao_Paulo");


if(isset($_POST["gerado"])){
    $gerarSenha = rand(5, 1200412);
    $data = date("Y-m-d");  
    cadastrar($data,$gerarSenha,"AGUARDANDO ATENDIMENTO");
}else{
    $gerarSenha = 0;
}

?>

<?php require_once("shared/header.php");  ?>

<div class="row d-flex flex-column flex-wrap align-items-center justify-content-center ">
        <h1 class="text-center"><?= $gerarSenha ?></h1>
        <button  type="button" onclick="alert('Imprimindo a senha:' + <?= $gerarSenha ?>)"
            class="btn btn-secondary btn-sm">Imprimir</button>
<div>


<?php require_once("shared/footer.php"); ?>