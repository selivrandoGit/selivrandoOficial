<?php
 include 'conexao/conecta.inc';
    
$codigo_usuario     = $_REQUEST['codigo'];
$nome_usuario       = $_POST['nome'];
$email_usuario      = $_POST['login'];
$senha_usuario      = $_POST['senha'];
$cep_usuario        = $_POST['cep'];
$logradouro_usuario = $_POST['logradouro'];
$cpf_usuario        = $_POST['cpf'];

$sql = "UPDATE usuarios SET NOME_USUARIO = '$nome_usuario', EMAIL_USUARIO = '$email_usuario', SENHA_USUARIO = '$senha_usuario', CEP_USUARIO = '$cep_usuario',";
$sql.= "LOGRADOURO_USUARIO = '$logradouro_usuario', CPF_USUARIO = '$cpf_usuario'";
$sql.= " WHERE COD_USUARIO = '$codigo_usuario'"; 
//echo $sql;

//A função mysql_query, executa uma ação (INSERT, UPDATE, SELECT ou DELETE)no banco de dados, ela recebe um parâmetro query 
//e retorna um valor booleano (TRUE ou FALSE)

if(mysql_query($sql)){
    echo 'Dados atualizados com sucesso!';
}
else{
    echo mysql_error();
}

?>
