<?php
$title = "Register";
// Début du Html
ob_start();
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Register</button>
</form>
<?php

$content = ob_get_clean();
require 'layout.php';
?>