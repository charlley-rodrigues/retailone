<?php 

$usuario = 'root';
$senha = '';
$database = 'retailone';
$host = 'localhost';

$conexao = new mysqli($host, $usuario, $senha, $database);

if($conexao->error) {
    die("Falha ao conectar ao banco de dados" . $mysqli->error);
}