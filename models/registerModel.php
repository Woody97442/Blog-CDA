<?php

/**
 * Enregistre un utilisateur avec le nom d'utilisateur et le mot de passe donnés.
 *
 * @param string $username Le nom d'utilisateur de l'utilisateur.
 * @param string $password Le mot de passe de l'utilisateur.
 * @throws PDOException S'il y a une erreur lors de l'exécution de la requête de la base de données.
 * @return bool True si l'utilisateur est enregistré avec succès, false sinon.
 */
function register($username, $password)
{
    global $pdo;
    $query = $pdo->prepare("INSERT INTO user (username, password) VALUES (:u, :p)");
    $query->execute([
        'u' => $username,
        'p' => password_hash($password, PASSWORD_DEFAULT)
    ]);
    return true;
}
