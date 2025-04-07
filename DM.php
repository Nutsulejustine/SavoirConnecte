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
  </style>
</head>
<body>

  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Savoirs Connectés</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="uploaderDocument.php">Uploader Document</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="x.php ">Rechercher Documents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="">Directeur de Mémoire</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="card-container">
    <h2 class="mb-4 text-center"> Directeurs de Mémoire</h2>
    <div class="row">
      <!-- Directeur 1 -->
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Dr. Jean Dupont">
          <div class="card-body">
            <h5 class="card-title">Dr. Jean Dupont</h5>
            <p class="card-text">Spécialité : Biologie</p>
            <p class="card-text">Université : Université de Paris</p>
            <p class="card-text">Note : ★★★★☆</p>
            <a href="mailto:jean.dupont@email.com" class="btn btn-primary">Contacter</a>
          </div>
        </div>
      </div>

      <!-- Directeur 2 -->
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Dr. Marie Curie">
          <div class="card-body">
            <h5 class="card-title">Dr. Marie Curie</h5>
            <p class="card-text">Spécialité : Physique</p>
            <p class="card-text">Université : NS</p>
            <p class="card-text">Note : ★★★★★</p>
            <a href="mailto:marie.curie@email.com" class="btn btn-primary">Contacter</a>
          </div>
        </div>
      </div>

      <!-- Directeur 3 -->
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Dr. Albert Einstein">
          <div class="card-body">
            <h5 class="card-title">Dr. Albert Einstein</h5>
            <p class="card-text">Spécialité : Mathématiques</p>
            <p class="card-text">Université : MIT</p>
            <p class="card-text">Note : ★★★★☆</p>
            <a href="mailto:albert.einstein@email.com" class="btn btn-primary">Contacter</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>