<?php
session_start();
include('config.php');

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Récupérez les informations du profil depuis la base de données
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du Profil</title>
</head>

<body>
    <h2>Gestion du Profil</h2>
    <p>Nom d'utilisateur: <?= $row['username']; ?></p>
    <p>Email: <?= $row['email']; ?></p>
    <!-- AJUSTEZ : Ajoutez d'autres champs du profil selon vos besoins -->
    
    <!-- Lien vers la page de déconnexion -->
    <p><a href="logout.php">Déconnexion</a></p>
</body>

</html>
