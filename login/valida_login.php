<?php
/*
require_once('config.php');

$senha = md5($_POST['senha']);

$sql = 'SELECT * FROM usuarios WHERE senha=:senha';
$resulta = $conn->prepare($sql);
$user = $resulta->fetch();
 

if(!empty($user)) {

    session_start();

    $_SESSION['senha'] = $user['senha'];

header('Location: sucesso.php');
}*/

$usuario_correto = "admin";
$senha_correta = password_hash("123", PASSWORD_DEFAULT);

$username = $_POST['nome'];
$password = $_POST['senha'];

if ($username === $usuario_correto && password_verify($password, $senha_correta)) {
    header("Location: sucesso.php");
} else {
    header("Location: falha.php");
}
?>
