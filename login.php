<?php

echo '<meta charset=UTF-8>';
//O include_once irá incluir qualquer arquivo enquanto for "apenas necessário",
// ou seja, caso o referido arquivo não tenha sido incluído anteriormente.
// A falha na inclusão não aborta a execução do script.
include_once 'conexao/conecta.inc';
include_once 'criptografiabcrypt.php';
session_start();

if($totalUsuarios === 0){
    echo '<a href=frmlogin.php> Usuário inexistente! </a> <br/>';
} else{
  $usuarios = mysql_fetch_array($result);
  $senhaUsuario = $usuarios['SENHA_USUARIO'];
  $tipoUsuario = $usuarios['TIPO_USUARIO'];
  $codigo = $usuarios['COD_USUARIO'];
  
  if(Bcrypt::check($senha)){
      echo '<a href=frmlogin.php> Senha não confere! </a>';
  } else{
      //Aqui temos o email e a senha corretos
      //Posso criar a sessão e direcionar
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha; 
      $_SESSION['codigo'] = $codigo;
      
      if($tipoUsuario === 'RES'){
          echo '<script language="JavaScript">
          location.href="indexrestrito.php"
          </script>';         
      } elseif ($tipoUsuario === 'ADM'){
          echo '<script language="JavaScript">
          location.href="admin/indexadmin.php"
          </script>';
      }
  }
}