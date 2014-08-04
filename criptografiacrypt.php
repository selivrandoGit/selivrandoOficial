<?php
$senha = 'ola mundo';
//$custo = '08';
//$salt = 'Cf1f11ePArK1BJomM0f6aJ';
// Gera um hash baseado em bcrypt
//$hash = crypt ($senha, '$2a$' . $custo . '$' . $salt . '$');



// Senha digitada pelo usuário (veio do formulário)
//$senha = 'ola mundo';
// Senha já criptografada (salva no banco)
$hash = '$2a$08$Cf1f11ePArKlBJomM0F6a.EyvTNh6W2huyQi5UZst5qsHVyi3w5x.';
if (crypt($senha, $hash) === $hash) {
echo 'Senha OK!';
} else {
echo 'Senha Incorreta!';
}