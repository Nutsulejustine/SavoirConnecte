<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uploader Documents - Savoirs Connectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar {
      margin-bottom: 20px;
    }
    .form-container {
      max-width: 600px;
      margin: 60px auto;
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="acceuil.php">Savoirs Connectés</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="uploaderDocument.php">Uploader Document</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="x.php">Rechercher Documents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="DM.php">Directeur de Mémoire</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="form-container">
    <h2 class="mb-4 text-center">Uploader un Document</h2>
    <form>
      <div class="mb-3">
        <label for="title" class="form-label">Titre du Document</label>
        <input type="text" class="form-control" id="title" placeholder="Titre du document" required>
      </div>
      <div class="mb-3">
        <label for="author" class="form-label">Auteur</label>
        <input type="text" class="form-control" id="author" placeholder="Nom de l'auteur" required>
      </div>
      <div class="mb-3">
        <label for="file" class="form-label">Choisissez un fichier</label>
        <input type="file" class="form-control" id="file" required>
      </div>
      <div class="mb-3">
        <label for="domain" class="form-label">Domaine</label>
        <select class="form-select" id="domain" required>
          <option value="" disabled selected>Sélectionnez un domaine</option>
          <option value="science">Science</option>
          <option value="mathematiques">Mathématiques</option>
          <option value="physique">Physique</option>
          <option value="humanites">Humanités</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary w-100">Uploader</button>
    </form>
  </div>

</body>
</html>