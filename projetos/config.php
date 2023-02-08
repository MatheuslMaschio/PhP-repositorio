<!-- aqui criamos a conexão com o banco de dados -->
<?php
define("HOST", 'localhost'); //definindo o host
define('USER', 'root'); //definindo o usuario
define('PASS', ''); //definindo o senha
define('BASE', 'cadastro'); //definindo a base de dados


$conn = new MySQLi(HOST, USER, PASS, BASE); //criando conexão com o MySQLi

