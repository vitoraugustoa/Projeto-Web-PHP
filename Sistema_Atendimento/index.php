<?php require_once("shared/header.php"); ?>
           
<div class="row center aling-middle">
    <form action="exibeSenha.php" method="POST">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Gerar Senha</button>
            <input type="hidden" name="gerado" value="gerado">
    </form>
</div>


<?php require_once("shared/footer.php"); ?>

