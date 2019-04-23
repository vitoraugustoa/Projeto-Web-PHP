<?php
    session_start();
    unset($_SESSION['Logado']);
    $_SESSION['Alerta'] = 
    '
    <div id="close">
    <i class="fas fa-smile"></i>
    <div class="alert alert-primary" role="alert">
        Volte sempre!
        <button type="button" onclick="closediv()" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    </div>
   ';
    header("location: ../index.php");


?>