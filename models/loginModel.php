<?php

function login($username, $password)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM user WHERE username = :u");
    $query->execute([
        'u' => $username,
    ]);
    $user = $query->fetch();
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        return true;
    }
    return false;
}
