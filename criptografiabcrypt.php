<?php 
echo '<meta charset=UTF-8>';
include_once 'classe/Bcrypt.class.php';
include_once 'conexao/conecta.inc';


$email = isset($_POST['email'])?$_POST['email']:null;;
$senha = isset($_POST['senha'])?$_POST['senha']:null;

$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
$usuarios = mysql_fetch_array($result);
$hash = $usuarios['SENHA_USUARIO'];

//$totalUsuarios = mysql_num_rows($result);
//$hash = Bcrypt::hash($senha);


//verificação
if (Bcrypt::check($senha, $hash))
{
    echo 'Senha OK!';
} else{
    echo 'Senha Incorreta';
}
