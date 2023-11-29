<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar se o usuário existe
    $users = file_get_contents('users.txt');

    // Adicionando verificação de usuário
    if (strpos($users, "$username") !== false) {
        // Usuário existe, verificar a senha
        $lines = explode("\n", $users);
        foreach ($lines as $line) {
            list($storedUsername, $hashedPassword) = explode(',', $line);
            if ($username === $storedUsername && password_verify($password, $hashedPassword)) {
                // Usuário autenticado, redirecionar para a página de sucesso no login
                header("Location: sucesso2.html");
                exit();
            }
        }
    }

    // Falha na autenticação, redirecionar para a página de falha no login
    header("Location: falha.html");
    exit();
?>
