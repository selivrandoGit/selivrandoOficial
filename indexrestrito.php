<?php

include_once 'includes/funcoesuteis.inc';
validaAutenticacao('frmlogin.php', 'RES');


  $codigo_usuario =  $_SESSION['codigo'];
echo '<meta charset=UTF-8>';
echo '<h3> Página Inicial - (Usuário Restrito) </h3>';
echo '<a href=frmAtualizarUsuario.php?codigo='.$codigo_usuario.'> Alterar (Perfil) </a> <br/>';
echo '<a href=logout.php> Efetuar Logout </a>';