<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'teste');
define('SENHA', 'teste');
define('DB', 'usuarios');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar ao banco de dados, verifique a conexão');
