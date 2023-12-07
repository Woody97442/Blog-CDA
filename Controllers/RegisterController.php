<?php

if ($_POST && $_POST["username"] && $_POST["password"]) {
    // Lorsque l'utilisateur clique sur le bouton de registration
    // Vérifie si le nom d'utilisateur et le mot de passe sont corrects
    require('models/registerModel.php');
    $user = register($_POST["username"], $_POST["password"]);
    if ($user) {
        echo "Bienvenue " . $_POST["username"];
    } else {
        echo "Une erreur est survenue lors de l'enregistrement";
    }
}
require('templates/registerPage.php');
