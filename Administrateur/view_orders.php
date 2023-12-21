<?php
session_start();
include('../config.php');

// Vérifiez si l'utilisateur est connecté et a le rôle d'administrateur
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

// Récupérez la liste des commandes depuis la base de données
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualiser les Commandes</title>
</head>

<body>
    <h2>Visualiser les Commandes</h2>
    <table border="1">
        <tr>
            <th>ID de la Commande</th>
            <th>ID de l'Utilisateur</th>
            <th>Produit Commandé</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?= $row['order_id']; ?></td>
                <td><?= $row['user_id']; ?></td>
                <td><?= $row['product_name']; ?></td>
                <td><?= $row['quantity']; ?></td>
                <td><?= $row['total']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>
