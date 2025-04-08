<?php
// Vérifie le type d'utilisateur
if (isset($_GET['type'])) {
    $type = $_GET['type'];

    if ($type === 'etudiant') {
        // Redirige vers la page liste.php pour les étudiants
        header('Location: liste.php');
        exit();
    } elseif ($type === 'directeur') {
        // Redirige vers la page demande.php pour les directeurs
        header('Location: demande.php');
        exit();
    }
}

// Si aucun type n'est défini, redirige vers une page par défaut
header('Location: connexion.php');
exit();