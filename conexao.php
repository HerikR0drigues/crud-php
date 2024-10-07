<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '1341');
define('DB', 'crud_php');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar!');

?>