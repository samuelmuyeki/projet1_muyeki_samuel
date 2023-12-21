<?php
session_start();
include('../config.php');

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

// AJUSTEZ : Ajoutez votre logique pour récupérer et afficher les détails de la commande
// Par exemple, vous pourriez récupérer les produits dans le panier de l'utilisateur
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmer la Commande</title>
</head>

<body>
    <h2>Confirmer la Commande</h2>
    
</body>

</html>
