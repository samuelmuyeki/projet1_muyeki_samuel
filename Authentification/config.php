<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom1_projet";

// Établir une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
?>

