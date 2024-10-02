<?php 
##### CAPTURANDO VARIÁVEIS DO FORM #####
$email = $_POST["txtEmail"];
$senhaUsuario = $_POST["txtSenha"];


##### INCLUINDO CONEXÃO BD #####
include "conexao_bd.php";

if(isset ($senha) || isset ($email))
{
    if(strlen($senha == 0))
    echo "Preecha sua senha";
    else if($email == 0)
    echo  " Preecha seu email" ;
}

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senhaUsuario'";

$resultado = retornarDados($sql);

if ($resultado == 0)
{
    echo "<h1>usuário inexistente</h1>";
   
}
else
{
    header("location:main.php");
}







?>