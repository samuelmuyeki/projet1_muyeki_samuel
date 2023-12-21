<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Effectuez une requête pour insérer un nouvel utilisateur dans la base de données
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Erreur lors de l'inscription : " . $conn->error;
    }
}
?>

<!-- Formulaire HTML pour l'inscription -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <h2>Inscription</h2>
    <form method="post" action="">
        <label>Nom d'utilisateur:</label>
        <input type="text" name="username" required><br>

        <label>Mot de passe:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Inscription">
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>

    <!-- Lien vers la page de connexion -->
    <p>Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</body>

</html>


