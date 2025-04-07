<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultation des Documents - Savoirs Connectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar {
      margin-bottom: 20px;
    }
    .form-container {
      max-width: 100%; /* La largeur occupe toute la page */
      margin: 0; /* Enlève la marge */
      padding: 30px;
      background: white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            <a class="nav-link active" href="x.php">Rechercher Documents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="DM.php">Directeur de Mémoire</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Formulaire de recherche -->
  <div class="form-container text-center">
    <h2 class="mb-4">Recherche de Documents</h2>
    <form>
      <div class="mb-3">
        <label for="search" class="form-label">Rechercher par domaine ou thème</label>
        <input type="text" class="form-control" id="search" placeholder="Entrez un domaine ou un thème" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Rechercher</button>
    </form>
  </div>
  <div class="row">
      <!-- Document 1 -->
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Document 1">
          <div class="card-body">
            <h5 class="card-title">Titre du Document 1</h5>
            <p class="card-text">Auteur : Jean Dupont</p>
            <p class="card-text">Université : Université de Paris</p>
            <p class="card-text">Domaine : Science</p>
            <p class="card-text">Note : ★★☆☆☆ </p>
            <p class="card-text"><small class="text-muted">Nombre de vues : 120</small></p>
            <button class="btn btn-secondary" disabled>Document payant</button>
          </div>
        </div>
      </div>

      <!-- Document 2 -->
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Document 2">
          <div class="card-body">
            <h5 class="card-title">Titre du Document 2</h5>
            <p class="card-text">Auteur : Marie Curie</p>
            <p class="card-text">Université : École Normale Supérieure</p>
            <p class="card-text">Domaine : Mathématiques</p>
            <p class="card-text">Note : ★★★☆☆</p>
            <p class="card-text"><small class="text-muted">Nombre de vues : 75</small></p>
            <a href="document.html" class="btn btn-primary">Lire</a>
          </div>
        </div>
      </div>

      <!-- Document 3 -->
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Document 3">
          <div class="card-body">
            <h5 class="card-title">Titre du Document 3</h5>
            <p class="card-text">Auteur : Albert Einstein</p>
            <p class="card-text">Université : MIT</p>
            <p class="card-text">Domaine : Physique</p>
            <p class="card-text">Note : ★★★★☆</p>
            <p class="card-text"><small class="text-muted">Nombre de vues : 200</small></p>
            <a href="document.html" class="btn btn-primary">Lire</a>
</body>
</html>