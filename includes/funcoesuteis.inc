<?php
session_start();
function validaAutenticacao($url, $tipo)
{
    if ($tipo === 'RES'){
    include_once 'conexao/conecta.inc';
    }
    
    elseif ($tipo === 'ADM'){
        include_once '../conexao/conecta.inc';    
        
    }
    
    /*session_start();*/
    if(!isset($_SESSION['login']) or !isset($_SESSION['senha']))
    {        
        session_destroy();
        echo '<script type="text/javascript">
                location.href="'.$url.'"    
            </script>';
    }
    echo '<meta charset=UTF-8>';
    $email    = $_SESSION['login'];
    $senha    = $_SESSION['senha'];
    $query    = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";
    $result   = mysql_query($query);
    $usuarios = mysql_fetch_array($result);
    
    $emailCadastrado       = $usuarios['EMAIL_USUARIO'];
    $senhaCadastrada       = $usuarios['SENHA_USUARIO'];
    $tipoUsuarioCadastrado = $usuarios['TIPO_USUARIO'];
    
    if ($email !== $emailCadastrado){
        session_destroy();   
        // echo 'Email não confere! <br/>';
        echo '<script type="text/javascript">
                alert ("Email não confere\n Tipo de usuário inválido!");
                location.href="'.$url.'"    
            </script>';
    } 
        elseif($senha !== $senhaCadastrada){
        session_destroy();
        // echo 'Senha não confere! <br/>';
        echo '<script type="text/javascript">
                alert ("Senha não confere \n Tipo de usuário inválido!");
                location.href="'.$url.'"    
            </script>';
    }
        elseif ($tipo !== $tipoUsuarioCadastrado) {
        session_destroy();
       // echo 'Acesso negado para esse tipo de usuário!';     
        echo '<script type="text/javascript">
                alert ("Acesso negado\n Tipo de usuário inválido!");
                location.href="'.$url.'"    
            </script>';
    }
}