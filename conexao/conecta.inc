<?php
echo '<meta charset=UTF-8>';

//configuração

$server   = 'localhost';
$user     = 'root';
$password = '12345678';
$database = 'loginoficial3edb';

$connection = mysql_connect($server, $user, $password);

if ($connection === FALSE)
{
    echo 'Não foi possível estabelecer uma conexão com o gerenciador MYSQL <br/>';
    echo mysql_error();
}else{
    if(!mysql_select_db($database, $connection)){
        echo 'Não foi possível selecionar o banco de dados '.$database.'<br/>';
        echo mysql_error();
    }
}