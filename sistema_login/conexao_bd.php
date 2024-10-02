<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "sistema_login";

global $conn;
$conn = mysqli_connect($servidor, $usuario, $senha, $bd);
############## VERIFICANDO CONEXÃO ##############
if (!$conn) {
    die("Falha na conexão" . mysqli_connect_error());
}

function executarComando($sql) {
    global $conn;
    if (mysqli_query($conn, $sql)) //"mysqli_query executa o comando SQL na base de dados" 
    {
        return true;
    } else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['$conn']);
        return false;
    }
}

    function retornarDados($sql) {
        global $conn;
        $resultado = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
           // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            return 0;
        }
    }

?>