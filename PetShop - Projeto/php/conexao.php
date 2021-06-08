<?php

define('HOST', 'fdb30.awardspace.net');
define('USUARIO', '3641634_cadastro');
define('SENHA', 'leonardo13');
define('DB', '3641634_cadastro');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

?>