<?php include 'action.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Directeurs de Mémoire - Savoirs Connectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    .card-img-top {
      height: 150px; /* hauteur fixe pour les images */
      object-fit: cover; /* ajustement de l'image */
    }
    .btn{
      background-color: #3498db;
    }
  </style>
</head>
<body>

  <!-- Barre de navigation -->
  <div class="content">
    <h2>Rechercher un Directeur de  Mémoire</h2>

    <!-- Barre de recherche -->
    <div style="text-align: center; margin-bottom: 20px;">
        <input type="text" placeholder="Rechercher une thématique..." style="width: 50%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">Rechercher</button>
    </div>
  <div class="card-container">
   
    <div class="row">
      <!-- Directeur 1 -->
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="uploads/1 "  class="card-img-top" alt="Dr. Jean Dupont">
          <div class="card-body">
            <h5 class="card-title">Dr. NOUKOUNOU Jean</h5>
            <p class="card-text">Spécialité : Biologie</p>
            <p class="card-text">Université : Université de Paris</p>
            <p class="card-text">Note : ★★★★☆</p>
            <p class="card-text">Prix : 90.000fcfa</p>
            <a href="mailto:jean.dupont@email.com" class="btn btn-primary">Contacter</a>
          </div>
        </div>
      </div>

      <!-- Directeur 2 -->
      <div class="col-md-4 mb-3">
        <div class="card">
        <img src="uploads/3 "  class="card-img-top" alt="Dr. Jean Dupont">
          <div class="card-body">
            <h5 class="card-title">Dr. Dossou Mirabelle</h5>
            <p class="card-text">Spécialité : Physique</p>
            <p class="card-text">Université : NS</p>
            <p class="card-text">Note : ★★★★★</p>
            <p class="card-text">Prix : 150 000fcfa</p>
            <a href="mailto:marie.curie@email.com" class="btn btn-primary">Contacter</a>
          </div>
        </div>
      </div>

      <!-- Directeur 3 -->
      <div class="col-md-4 mb-3">
        <div class="card">
        <img src="uploads/2 "  class="card-img-top" alt="Dr. Jean Dupont">
          <div class="card-body">
            <h5 class="card-title">Dr.  ADJATA Kekeli </h5>
            <p class="card-text">Spécialité : Mathématiques</p>
            <p class="card-text">Université : MIT</p>
            <p class="card-text">Note : ★★★★☆</p>
            <p class="card-text">Prix : 250.000fcfa</p>
            <a href="mailto:albert.einstein@email.com" class="btn btn-primary">Contacter</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>