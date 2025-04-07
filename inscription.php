<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription - Savoirs Connectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 500px;
      margin: 60px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2 class="mb-4 text-center">Inscription</h2>
    <form>
      <div class="mb-3">
        <label for="name" class="form-label">Nom complet</label>
        <input type="text" class="form-control" id="name" placeholder="Votre nom complet" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control" id="email" placeholder="votre@email.com" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="••••••••" required>
      </div>
      <div class="mb-3">
        <label for="confirm-password" class="form-label">Confirmez le mot de passe</label>
        <input type="password" class="form-control" id="confirm-password" placeholder="••••••••" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
    </form>
    <div class="mt-3 text-center">
      <a href="connexion.php">Déjà un compte ? Se connecter</a>
    </div>
  </div>
</body>
</html>