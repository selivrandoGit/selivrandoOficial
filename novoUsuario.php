<?php

echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.inc';
include_once 'criptografiabcrypt.php';

$email = isset($_POST['login'])?$_POST['login']:null;
$nome = isset($_POST['nome'])?$_POST['nome']:null;
$senha = isset($_POST['senha'])?$_POST['senha']:null;
$tipoUsuario = 'RES';

$senhaCriptografada = Bcrypt::hash($senha);
//cadastrar senha criptografada

$query = "INSERT INTO usuario (NOME_USUARIO, EMAIL_USUARIO, SENHA_USUARIO, TIPO_USUARIO)";
$query.= " VALUES('$nome','$email','$senhaCriptografada','$tipoUsuario')";

if(mysql_query($query))
{
    echo '<script> alert("Cadastrado efetuado com sucesso!") </script>';
    echo '<a href=frmlogin.php> Efetuar Login </a>';
}else{
    echo '<script>
     alert("Não foi possível seu cadastro!") 
     location.href="index.php"
    </script>';
    
}