<?php include 'action.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paiement | Savoirs Connectés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f4f4f4;
            text-align: center;
        }

        .box {
            background-color: white;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #2c3e50;
        }

        input, button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .pay-options {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .pay-options button {
            width: 40%;
            font-weight: bold;
            cursor: pointer;
        }

        .yas { background-color: #3498db; color: white; }
        .flooz { background-color: orange; color: white; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Paiement de votre offre</h2>
        <form id="paymentForm">
            <label for="montant">Montant à payer (en F CFA) :</label>
            <input type="number" id="montant" name="montant" placeholder="Ex: 1500" required min="50">

            <label for="phone">Numéro de téléphone :</label>
            <input type="tel" id="phone" name="phone" placeholder="Ex: 90909090" required pattern="[0-9]{8}">

            <div class="pay-options">
                <button type="button" class="yas" onclick="payer('yas')">Mixx by Yas</button>
                <button type="button" class="flooz" onclick="payer('flooz')">Flooz</button>
            </div>
        </form>
    </div>

    <script>
        function payer(methode) {
            const montant = document.getElementById('montant').value;
            const phone = document.getElementById('phone').value;

            if (!montant || !phone) {
                alert('Veuillez remplir tous les champs.');
                return;
            }

            if (parseInt(montant) < 50) {
                alert("Le montant doit être au minimum de 50 F CFA.");
                return;
            }

            // Redirection vers la bonne page PHP
            if (methode === 'yas') {
                window.location.href = `paiement_yas.php?montant=${montant}&phone=${phone}`;
            } else if (methode === 'flooz') {
                window.location.href = `paiement_flooz.php?montant=${montant}&phone=${phone}`;
            }
        }
    </script>
</body>
</html>
