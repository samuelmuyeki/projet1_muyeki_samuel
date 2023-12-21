<?php
session_start();
include('config.php');

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Supprimez le compte de l'utilisateur de la base de données
    $username = $_SESSION['username'];
    $sql = "DELETE FROM users WHERE username = '$username'";
    if ($conn->query($sql) === TRUE) {
        session_destroy(); // Détruire toutes les sessions après la suppression du compte
        header("Location: login.php"); // Rediriger vers la page de connexion
        exit();
    } else {
        $error = "Erreur lors de la suppression

