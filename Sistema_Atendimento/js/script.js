$(document).ready(function () {
    VerificaProximaSenha();

    setInterval(function () {
        VerificaProximaSenha();
    }, 5000)
});

function ProximaSenha() {
    const url = 'http://localhost/Projeto-Web-PHP/Sistema_Atendimento/proximaSenha.php';
    const data = {
        id: 'Hakuna Matata'
    };

    $.post(url, data, data => {
        console.log("Senha sendo atendida: " + data);
        if(data > 0){
            $("#p-senha").fadeIn();
            $("#p-senha").text(data);
        }
        else
        {
            $("#p-senha").fadeOut();
            $("#button-proximo").fadeOut();
        }        
    })
}


function VerificaProximaSenha() {
    const url = 'http://localhost/Projeto-Web-PHP/Sistema_Atendimento/verificaProximaSenha.php';
    const data = {
        id: 'Hakuna Matata'
    };

    $.post(url, data, data => {
        if(data > 0)
        {
            $("#button-proximo").fadeIn();
            $("#div-alerta").fadeOut();
        }
        else
        {
            $("#div-alerta").fadeIn();
            $("#alerta-sem-senha").text("Sem senha na fila!");
        }
    })
}

