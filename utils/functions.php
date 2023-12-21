<?php


// Fonction pour afficher un message d'erreur et rediriger l'utilisateur
function showErrorAndRedirect($errorMessage, $redirectUrl) {
    echo "<p style='color: red;'>Erreur : $errorMessage</p>";
    header("Refresh: 5; URL=$redirectUrl"); // Redirection après 5 secondes
    exit();
}

// Fonction pour générer une option de sélection dans un formulaire
function generateSelectOption($value, $label, $selectedValue = null) {
    $selectedAttribute = ($selectedValue !== null && $value == $selectedValue) ? 'selected' : '';
    return "<option value='$value' $selectedAttribute>$label</option>";
}


?>
