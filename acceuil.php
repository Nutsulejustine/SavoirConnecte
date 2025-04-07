<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SavoirsConnectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      background-color: #f4f4f4;
      font-family: 'Arial', sans-serif;
    }
    .hero {
      background-color: #007bff;
      color: white;
      padding: 40px 0; /* Réduction de la hauteur */
      text-align: center;
      border-bottom: 5px solid #0056b3;
      position: relative;
    }
    .hero img {
      position: absolute;
      right: 20px; /* Positionnement à droite */
      top: 20px; /* Positionnement légèrement en haut */
      height: 80px; /* Taille réduite */
    }
    .hero h1 {
      font-size: 2.5rem; /* Ajustement de taille */
    }
    .hero p {
      font-size: 1.2rem;
    }
    .hero-buttons .btn {
      margin: 10px;
    }
    .document-card {
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      background-color: #ffffff;
    }
    .document-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    .document-card h5 {
      font-size: 1.4rem;
      color: #333;
      margin-bottom: 0.5rem;
    }
    .badge-custom {
      background-color: #28a745;
      color: white;
      font-size: 0.8rem;
      border-radius: 5px;
      padding: 5px 10px;
    }
    footer {
      background-color: #343a40;
      color: white;
      padding: 20px 0;
      text-align: center;
      position: relative;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <!-- Section Accueil avec logo, description et boutons -->
  <section class="hero">
    <img src="uploads/oir.png" alt="Logo Savoirs Connectés">
    <div class="container">
      <h1 class="mt-3">SavoirsConnectés</h1>
      <p class="mb-4">Partagez, valorisez et protégez vos travaux académiques</p>
      <div class="hero-buttons">
        <a href="connexion.php" class="btn btn-light btn-lg">Connexion</a>
        <a href="inscription.php" class="btn btn-outline-light btn-lg">Inscription</a>
      </div>
    </div>
  </section>

  <main class="container my-4">
    <!-- Présentation -->
    <section class="text-center mb-5">
      <h2>Accédez à une bibliothèque académique sécurisée et connectée</h2>
    </section>
            <!-- Document 1 -->
            <div class="row">
  <div class="col-md-4 mb-4">
    <div class="document-card p-3">
      <h5> Intelligence Artificielle</h5>
      <p>Auteur : Jean Dupont</p>
      <p>Université : Sorbonne</p>
      <p>Domaine : Informatique</p>
      <small>Vues : 120 • Téléchargements : 30</small>
      <div class="mt-2">
        <span class="badge badge-custom">Téléchargement Premium</span>
        <button class="btn btn-sm btn-secondary w-100 mt-2" disabled>Télécharger</button>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="document-card p-3">
      <h5>Energies renouvelables</h5>
      <p>Auteur : Fatou Diop</p>
      <p>Université : Dakar</p>
      <p>Domaine : Environnement</p>
      <small>Vues : 98 • Téléchargements : 22</small>
      <div class="mt-2">
      <span class="badge badge-custom">Téléchargement Premium</span>
      <button class="btn btn-sm btn-secondary w-100 mt-2" disabled>Télécharger</button>
    </div>
  </div>

 

  <!-- Ajoutez d'autres documents ici si nécessaire de la même manière -->
</div>