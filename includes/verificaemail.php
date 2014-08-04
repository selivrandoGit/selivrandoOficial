<?php

$email = $_GET['login'];
//configuração
$server   = 'localhost';
$user     = 'root';
$password = '12345678';
$database = 'loginoficial3edb';
$connection = mysql_connect($server, $user, $password);
mysql_select_db($database, $connection);

// criando uma matriz para guardar todos os emails cadastrados
$emailsCadastrados = array();

// montando a query de consulta
$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);

//Guardando o resultado da consulta na matriz $emailsCadastrados
while ($usuarios = mysql_fetch_assoc($result))
{
    $emailsCadastrados[] = $usuarios['EMAIL_USUARIO'];
}

//A função in_array, verifica se um elemento existe dentro de uma matriz.
//A função recebe dois parâmetros, "o elemento a ser pesquisado" e a "matriz de elementos"
//Veja:

if(in_array($email, $emailsCadastrados))
{
    echo 'false';
}  else {
    echo 'true';
}
exit();