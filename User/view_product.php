<?php
session_start();
include('../config.php');

if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];
    
    // Récupérez les détails du produit depuis la base de données
    $sql = "SELECT * FROM products WHERE id = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $product = $result->fetch_assoc();
    } else {
        // Gérer le cas où le produit n'est pas trouvé
    }
} else {
    // Gérer le cas où l'ID du produit n'est pas fourni dans l'URL
    // Rediriger l'utilisateur vers la page de recherche ou ailleurs
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include('../config.php');

if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];
    
    // Récupérez les détails du produit depuis la base de données
    $sql = "SELECT * FROM products WHERE id = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $product = $result->fetch_assoc();
    } else {
        // AJUSTEZ : Gérez le cas où le produit n'est pas trouvé
        // Par exemple, vous pourriez rediriger l'utilisateur ou afficher un message d'erreur
    }
} else {
    // AJUSTEZ : Gérez le cas où l'ID du produit n'est pas fourni dans l'URL
    // Par exemple, vous pourriez rediriger l'utilisateur vers la page de recherche ou ailleurs
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Produit</title>
</head>

<body>
    <h2>Détails du Produit</h2>
    <?php if (isset($product)) : ?>
        <h3><?= $product['name']; ?></h3>
        <p>Prix: <?= $product['price']; ?></p>
        <!-- AJUSTEZ : Ajoutez ici d'autres détails du produit en fonction de vos besoins -->
    <?php else : ?>
        <p>Produit non trouvé.</p>
    <?php endif; ?>
</body>

</html>
