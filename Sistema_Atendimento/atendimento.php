<?php require_once("shared/header.php"); ?>
           
<div id="button-proximo" style="display: none" class="row center aling-middle">
            <button type="submit" id="button" onClick="ProximaSenha()" class="btn btn-primary btn-lg btn-block">Chamar proxima senha</button>
            
</div>
<p id="p-senha" class="lead text-center text-uppercase text-danger font-weight-bold"> </p>
            <div id="div-alerta" style="display: none" class="alert alert-danger" role="alert">
                <span id="alerta-sem-senha"></span>
                </div>



<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="js/script.js"></script>