<?php include 'action.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos Offres - Savoirs Connectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      padding: 40px;
    }
    .card {
      border: none;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #343a40;
      color: white;
      font-weight: bold;
      text-align: center;
    }
    .btn-custom {
      background-color: #dc572e; /* Couleur personnalisée pour les boutons */
      color: white;
    }
    .btn-custom:hover {
      background-color: #c85227; /* Couleur au survol pour les boutons */
    }
  </style>
</head>
<body>

  <div class="container">
    <h1 class="text-center mb-4">Nos Offres</h1>
    <div class="row">
      <!-- Offre Gratuite -->
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header">
            Gratuit
          </div>
          <div class="card-body text-center">
            <h3>0 XOF</h3>
            <ul class="list-unstyled">
              <li>Créer un profil académique</li>
              <li>Consultation limitée des travaux</li>
              <li>Fonctionnalités sociales de base</li>
              <li>Publicités incluses</li>
              <li>Protection basique</li>
            </ul>
            <a href="liste.php" class="btn btn-custom">Commencer</a>
          </div>
        </div>
      </div>

      <!-- Offre Standard -->
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header">
            Standard
          </div>
          <div class="card-body text-center">
            <h3>5000 XOF/mois</h3>
            <ul class="list-unstyled">
              <li>Accès illimité aux travaux</li>
              <li>Aucune publicité</li>
              <li>Protection avancée</li>
              <li>Statistiques de consultation</li>
              <li>Fonctionnalités sociales complètes</li>
            </ul>
            <a href="payement.php" class="btn btn-custom">S'abonner</a>
          </div>
        </div>
      </div>
      
      <!-- Offre Crédits -->
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header">
            Crédits
          </div>
          <div class="card-body text-center">
            <h3>250 XOF/crédit</h3>
            <ul class="list-unstyled">
              <li>Paiement à l'utilisation</li>
              <li>10 crédits = 1 document premium</li>
              <li>Réduction pour achats groupés</li>
              <li>Protection standard</li>
              <li>Validité des crédits : 1 an</li>
            </ul>
            <a href="payement.php" class="btn btn-custom">Acheter des crédits</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>