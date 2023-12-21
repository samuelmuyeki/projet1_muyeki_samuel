<?php
session_start();
include('../config.php');

// Vérifiez si l'utilisateur est connecté et a le rôle d'administrateur
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

// Récupérez la liste des utilisateurs depuis la base de données
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer les Utilisateurs</title>
</head>

<body>
    <h2>Gérer les Utilisateurs</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom d'Utilisateur</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><a href="upgrade_user.php?id=<?= $row['id']; ?>">Mettre à Niveau</a> | <a href="delete_user.php?id=<?= $row['id']; ?>">Supprimer</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>
