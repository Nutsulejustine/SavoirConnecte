<?php
// Récupération des données
$montant = $_GET['montant'] ?? 0;
$phone = $_GET['phone'] ?? 'inconnu';

// Simuler un petit délai de traitement
sleep(2); // optionnel, pour le réalisme

// Générer un identifiant de transaction
$transaction_id = strtoupper(uniqid("FLOOZ-"));

// Ici tu peux enregistrer dans une base de données si tu veux

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation Paiement Flooz</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #fff3e6; text-align: center; padding: 50px; }
        .box {
            background: white;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { color: #e67e22; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Paiement réussi via Flooz</h2>
        <p><strong>Montant :</strong> <?= htmlspecialchars($montant) ?> F CFA</p>
        <p><strong>Téléphone :</strong> <?= htmlspecialchars($phone) ?></p>
        <p><strong>ID Transaction :</strong> <?= $transaction_id ?></p>
        <p>Merci pour votre paiement !</p>
    </div>
</body>
</html>
