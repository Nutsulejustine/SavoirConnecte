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
     .btn{
      background-color: #3498db;
    }
  </style>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Savoirs Connectés</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            background-color: white;
            color: #3498db;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color:#3498db;
            color: white;
        }

        .content {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
  <div class="form-container">

    <h2 class="mb-4 text-center">Inscription</h2>
    <header>
        <h1><i class="fas fa-brain"></i>
        Savoirs Connectés</h1>
        
        
    </header>
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
      <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
    </form>
    <div class="mt-3 text-center">
      <a href="connexion.php">Déjà un compte ? Se connecter</a>
    </div>
  </div>
</body>
</html>