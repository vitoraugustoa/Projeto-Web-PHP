<?php
        function conecta($sql)
        {
            @header("Content-type: text/html; charset=utf-8");
            $conexao = mysql_connect("localhost","root","root") or die ('<center><h1>Falha na conex�o com o banco de dados</h1></center>'.mysql_error());
            $db = mysql_select_db("autentica",$conexao) or die ('<center><h1>Falha na sele��o do banco de dados</h1></center>'.mysql_error());
            $resultado = mysql_query($sql,$conexao) or die ('<center><h1>Login e senha incorretos</h1></center>'.mysql_error());
            return $resultado;
        }

        function autentica($usuario, $senha){
            $query = "SELECT * FROM users WHERE nomeUser = '$usuario' AND passwordUser = '$senha'";
              $resultado = conecta($query);
              if(mysql_num_rows($resultado) > 0)
                   return true;
              else
                    return false;
        }

?>