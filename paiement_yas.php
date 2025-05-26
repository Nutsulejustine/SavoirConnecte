<?php
// Récupération des données de l'URL
$montant = $_GET['montant'] ?? 0;
$phone = $_GET['phone'] ?? 'inconnu';

// Simuler une transaction avec délai
sleep(2); // pause pour simuler le traitement

// Générer un ID de transaction fictif
$transaction_id = strtoupper(uniqid("YAS-"));

// Enregistrer dans un fichier ou une base de données ici (optionnel)

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation Paiement Mixx</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f1f1f1; text-align: center; padding: 50px; }
        .box {
            background: white;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 { color: #3498db; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Paiement réussi via Mixx by Yas</h2>
        <p><strong>Montant :</strong> <?= htmlspecialchars($montant) ?> F CFA</p>
        <p><strong>Téléphone :</strong> <?= htmlspecialchars($phone) ?></p>
        <p><strong>ID Transaction :</strong> <?= $transaction_id ?></p>
        <p>Merci pour votre paiement !</p>
    </div>
</body>
</html>
