<?php
include_once 'classe/Bcrypt.class.php';
include_once 'conexao/conecta.inc';

$nome = isset($_POST['nome'])?$_POST['nome']:null;
$email = isset($_POST['email'])?$_POST['email']:null;
$confemail = isset($_POST['confemail'])?$_POST['confemail']:null;
$senha = isset($_POST['senha'])?$_POST['senha']:null;
$tipoUsuario = 'RES';

$senha = Bcrypt::hash($senha);
$query = "INSERT INTO usuario (NOME_USUARIO, EMAIL_USUARIO, SENHA_USUARIO, TIPO_USUARIO)";
$query .=  "VALUES('$nome','$email', '$senha', '$tipo')";
if(mysql_query($query))
    echo '<script>alert("Cadastro Realizado com Sucesso!"); location.href="frmlogin.php";</script>';
else
    echo mysql_error().'<br/> ' . '<a href="index.php"> Voltar  </a>';










 
