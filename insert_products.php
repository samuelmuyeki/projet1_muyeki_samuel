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

$products = array(
    array("patate", 2.99, "Description de la patate"),
    array("lotion", 15.99, "Description de la lotion"),
    array("creme", 12.50, "Description de la crème"),
    array("fruits", 8.99, "Description des fruits"),
    array("legumes", 6.75, "Description des légumes"),
    array("accessoires", 24.99, "Description des accessoires"),
    array("livres", 19.50, "Description des livres"),
    // ... Ajoutez des données pour les autres produits
);

// Insertion des produits dans la base de données
foreach ($products as $product) {
    $productName = $product[0];
    $productPrice = $product[1];
    $productDescription = $product[2];

    $sql = "INSERT INTO products (name, price, description) VALUES ('$productName', $productPrice, '$productDescription')";
    
    if ($conn->query($sql) !== TRUE) {
        echo "Erreur lors de l'insertion : " . $conn->error;
    }
}

// Fermer la connexion
$conn->close();
?>
