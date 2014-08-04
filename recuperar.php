<?php

//hash de 6 caracteres e salvar no banco
echo '<meta charset=UTF-8>';
function gerarSenha($tamanho = 6)
{    
    return substr(sha1(mt_rand()), 0, $tamanho);
}
$palavra = 'ABCDEF';
substr($palavra, 0, 3);
$saltDinamico = gerarSenha();
echo 'Sua senha provisória é: '.$saltDinamico;

$sql  = "INSERT INTO usuario (SENHA_USUARIO) VALUES ('$saltDinamico')";