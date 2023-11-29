<?php


$dbHost= 'Localhost';
$dbUsername = 'root';
$senha = '';
$dbName = 'formulario-paulo';

$conexao = new mysqli($dbHost, $dbUsername, $senha, $dbName);

/*
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno)
{
    echo "Erro";
}

else{
    // echo "conexao com sucesso";
}*/

try {
    $conn = new PDO('mysql:host=localhost;formulario-paulo=usuarios', $dbUsername, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>