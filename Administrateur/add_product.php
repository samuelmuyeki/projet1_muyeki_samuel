<?php
session_start();
include('../config.php');
include('../utils/functions.php');

// Vérifier le rôle de l'utilisateur
if (!isset($_SESSION['username']) || !isAdmin($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}

// Traitement du formulaire d'ajout de produit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productDescription = $_POST['product_description'];

    // Préparation de la requête SQL
    $sql = "INSERT INTO products (name, price, description) VALUES (?, ?, ?)";

    // Préparation de la déclaration
    $stmt = $conn->prepare($sql);

    // Liaison des paramètres
    $stmt->bind_param("sds", $productName, $productPrice, $productDescription);

    // Exécution de la déclaration
    $stmt->execute();

    // Fermeture de la déclaration
    $stmt->close();

    // Redirection après l'ajout du produit
    header("Location: view_products.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
</head>

<body>
    <h2>Ajouter un Produit</h2>
    <form method="post" action="">
        <label>Nom du Produit:</label>
        <input type="text" name="product_name" required><br>

        <label>Prix du Produit:</label>
        <input type="text" name="product_price" required><br>

        <label>Description du Produit:</label>
        <textarea name="product_description"></textarea><br>

        <input type="submit" value="Ajouter le Produit">
    </form>
</body>

</html>
