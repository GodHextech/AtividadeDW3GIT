<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar se o usuário já existe
    $users = file_get_contents('users.txt');

    // Adicionando verificação de usuário
    if (strpos($users, "$username") !== false) {
        // Usuário já existe, redirecionar para a página de falha no cadastro
        header("Location: falha_cadastro.html");
        exit();
    } else {
        // Criptografar a senha
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Adicionar usuário ao arquivo
        file_put_contents('users.txt', "$username,$hashedPassword\n", FILE_APPEND);
        // Redirecionar para a página de sucesso no cadastro
        header("Location: sucesso.html");
        exit();
    }
?>
