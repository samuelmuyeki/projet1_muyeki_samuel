<?php
session_start();
include('../Authentification/config.php'); 


include('../Authentification/config.php'); 

// Récupérer tous les produits depuis la base de données
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

// Vérifier les erreurs de la requête SQL
if (!$result) {
    die("Erreur dans la requête SQL: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher ou Filtrer des Produits</title>
</head>

<body>
    <h2>Rechercher ou Filtrer des Produits</h2>
    
    <!-- Afficher la liste des produits -->
    <ul>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <li>
                <h3><?= $row['name']; ?></h3>
                <p>Prix: <?= $row['price']; ?></p>
                <p>Description: <?= $row['description']; ?></p>
            </li>
        <?php endwhile; ?>
    </ul>
</body>

</html>

