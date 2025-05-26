<?php include 'action.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rapports - Savoirs Connectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      margin-bottom: 20px;
    }

    .card-container {
      max-width: 800px;
      margin: 20px auto;
    }

    .card {
      position: relative;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-img-top {
      height: 150px;
      object-fit: cover;
    }

    .card-body {
      text-align: center;
    }

    .btn {
      background-color: #3498db;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0;
      transition: opacity 0.3s;
    }

    .card:hover .btn {
      opacity: 1;
    }
  </style>
</head>

<body>

  <!-- Barre de navigation -->
  <div class="content">
    <h2>Liste des Rapports</h2>
    <div class="card-container">
      <div class="row">

        <!-- Rapport 1 -->
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Rapport 1">
            <div class="card-body">
              <h5 class="card-title">Thème: Intelligence Artificielle</h5>
              <p class="card-text">Étudiant: Jean Dupont</p>
              <p class="card-text">Directeur: Dr. Marie Curie</p>
              <a href="suivi.php" class="btn btn-primary">Voir Rapport</a>
            </div>
          </div>
        </div>

        <!-- Rapport 2 -->
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Rapport 2">
            <div class="card-body">
              <h5 class="card-title">Thème: Développement Web</h5>
              <p class="card-text">Étudiant: Sophie Martin</p>
              <p class="card-text">Directeur: Dr. Albert Einstein</p>
              <a href="suivi.php" class="btn btn-primary">Voir Rapport</a>
            </div>
          </div>
        </div>

        <!-- Rapport 3 -->
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Rapport 3">
            <div class="card-body">
              <h5 class="card-title">Thème: Gestion de Projet</h5>
              <p class="card-text">Étudiant: Pierre Leclerc</p>
              <p class="card-text">Directeur: Dr. Jean Dupont</p>
              <a href="suivi.php" class="btn btn-primary">Voir Rapport</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>

</html>
