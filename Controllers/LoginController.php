<?php
$base_url = "http://localhost/Blog-CDA/";

if ($_POST && $_POST["username"] && $_POST["password"]) {
    // Lorsque l'utilisateur clique sur le bouton de connexion
    // Vérifie si le nom d'utilisateur et le mot de passe sont corrects
    require('models/loginModel.php');
    $connected = login($_POST["username"], $_POST["password"]);
    if ($connected) {
        header("Location: $base_url");
    } else {
        echo "Mauvais identifiant ou mot de passe";
    }
}
require('templates/loginPage.php');
