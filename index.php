<?php
session_start();

// Votre logique pour la page d'accueil ou la redirection vers une page principale
// Par exemple :
// Si l'utilisateur est connecté, redirigez-le vers le tableau de bord
if (isset($_SESSION['username'])) {
    header("Location: user/dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commerce Électronique</title>
</head>

<body>
    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <h1>Bienvenue sur notre Plateforme de Commerce Électronique</h1>
    
    <section>
        <h2>Découvrez Nos Produits</h2>
        <p>Parcourez notre sélection de produits de haute qualité. Des articles uniques pour tous les goûts.</p>
        <a href="user/search_products.php">Voir les Produits</a>
    </section>

    <section>
        <h2>Offres Spéciales</h2>
        <p>Profitez de nos offres spéciales exclusives. Des réductions extraordinaires vous attendent.</p>
        <a href="user/view_product.php?id=1">Détails de l'Offre</a>
    </section>

    <section>
        <h2>Inscrivez-vous dès Maintenant</h2>
        <p>Créez un compte pour accéder à des fonctionnalités exclusives. Ne manquez aucune offre spéciale !</p>
        <a href="auth/register.php">Inscription</a>
    </section>

    <footer>
        <?php include('includes/footer.php'); ?>
    </footer>
</body>

</html>
