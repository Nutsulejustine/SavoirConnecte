<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - Savoirs Connectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      overflow: hidden;
    }
    .form-container {
      max-width: 500px;
      margin: 60px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      transform: translateY(-100%);
      animation: flyIn 0.8s ease-out forwards;
    }
    @keyframes flyIn {
      to {
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>



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
            background-color: #2980b9;
            color: white;
        }

        .content {
            padding: 20px;
            text-align: center;
        }
        .btn{
      background-color: #3498db;
    }
    </style>
</head>

</html>

<div class="form-container">
<body>
    <!-- Header -->
      <h2 class="mb-4 text-center">Connexion</h2>
    <header>
        <h1><i class="fas fa-brain"></i>
        Savoirs Connectés</h1>
        
        
    </header>

    <!-- Content -->
    <div class="content">
    </div>
</body>
    
    <form method="GET" action="redirect.php">
      <div class="mb-3">
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control" id="email" placeholder="votre@email.com">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="••••••••">
      </div>
      <?php if (isset($_GET['type']) && $_GET['type'] === 'directeur'): ?>
      <div class="mb-3">
        <label for="codedm" class="form-label">Code Directeur</label>
        <input type="text" class="form-control" id="codedm" placeholder="Entrez votre code directeur">
      </div>
      <?php endif; ?>
      <input type="hidden" name="type" value="<?php echo isset($_GET['type']) ? $_GET['type'] : 'etudiant'; ?>">
      <button type="submit" class="btn btn-primary w-100">Se connecter</button>
    </form>
    <div class="mt-3 text-center">
      <a href="inscription.php">Pas encore de compte ? S'inscrire</a>
    </div>
  </div>
</body>
</html>