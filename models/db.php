<?php
global $pdo;
$BDD_Name = "cda_blog";
$BDD_Host = "localhost";
$BDD_User = "root";
$BDD_Pass = "";
if (isset($pdo)) {
    return;
}
$pdo = new PDO("mysql:host=$BDD_Host;dbname=$BDD_Name", $BDD_User, $BDD_Pass);
