<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SavoirsConnectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .document-card, .pro-card {
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      border-radius: 8px;
    }
    .locked {
      opacity: 0.6;
    }
    .hero {
      background-color: #0d6efd;
      time new roman
      color: white;
      padding: 60px 0;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
    }
    .hero p {
      font-size: 1.2rem;
    }
    .hero-buttons .btn {
      margin: 10px;
    }
  </style>
</head>
<body>
  <!-- Section Accueil avec logo, description et boutons -->
  <section class="hero">
    <div class="container">
    <img src="uploads/oir.png" alt="Logo Savoirs Connectés" style="height: 100px;">
      <h1 class="mt-3">Savoirs Connectés</h1>
      <p class="mb-4">Partagez, valorisez et protégez vos travaux académiques</p>
      <div class="hero-buttons">
        <a href="connexion.php "  class="btn btn-light">Connexion</a>
        <a href="inscription.php" class="btn btn-outline-light">Inscription</a>
      </div>
    </div>
  </section>

  <main class="container my-4">
    <!-- Présentation -->
    <section class="text-center mb-5">
      <h2>Accédez à une bibliothèque académique sécurisée et connectée</h2>
    </section>

    <!-- Recherche Documents -->
    <section class="mb-4">
      <h3>Consulter des documents</h3>
      <input type="text" class="form-control mb-3" placeholder="Rechercher par domaine, auteur ou université">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="p-3 bg-white document-card">
            <h5>Thèse en Intelligence Artificielle</h5>
            <p>Auteur : Jean Dupont</p>
            <p>Université : Sorbonne</p>
            <p>Domaine : Informatique</p>
            <small>Vues : 120 • Téléchargements : 30</small>
            <button class="btn btn-sm btn-secondary w-100 mt-2" disabled>Télécharger (Premium)</button>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-3 bg-white document-card">
            <h5>Mémoire sur les énergies renouvelables</h5>
            <p>Auteur : Fatou Diop</p>
            <p>Université : Dakar</p>
            <p>Domaine : Environnement</p>
            <small>Vues : 98 • Téléchargements : 22</small>
            <button class="btn btn-sm btn-primary w-100 mt-2">Lire gratuitement</button>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-3 bg-white document-card">
            <h5>Finance-Banque</h5>
            <p>Auteur : Jean Dupont</p>
            <p>Université : Sorbonne</p>
            <p>Domaine : Gestion</p>
            <small>Vues : 120 • Téléchargements : 30</small>
            <button class="btn btn-sm btn-secondary w-100 mt-2" disabled>Télécharger (Premium)</button>
          </div>
      </div>
    </section>

    

   