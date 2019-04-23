<?php
session_start();
require_once('./funcoes.php');

$usuario = $_POST['usuario']; 
$senha = $_POST['senha'];

                if(autentica($usuario, $senha)){
                    $_SESSION['Logado'] = "Logado";
                    header("location: ../logado.php");
                }else{
                    unset($_SESSION['Logado']);
                    $_SESSION['Alerta'] = 
                    '
                    <div id="close">
                    <i class="fas fa-dizzy"></i>
                    <div class="alert alert-danger fade show" role="alertSenha">
                        Oops! Usuário ou Senha Incorretos! Favor tente novamente!
                        <button type="button" onclick="closediv()" class="close">
                            <span aria-hidden="true">&times;</span>
                     </button>
                     </div>
                    </div>
                   ';
                    header("location: ../index.php");
                }               
?>