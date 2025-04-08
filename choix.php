<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            gap: 30px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s;
            width: 300px;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card .icon {
            padding-top: 10px;
            font-size: 4rem; /* Augmente la taille des icônes */
            color: #3498db;
            margin-bottom: 10px;
        }

        .card h3 {
            margin: 20px 0;
            color: #2c3e50;
        }

        .card p {
            color: #7f8c8d;
            margin: 0 20px 20px;
        }

        .card .btn {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        .card .btn:hover {
            background-color: #2980b9;
        }

        .logo-container {
            text-align: center;
            background-color: #3498db;
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            margin-bottom: 50px;
        }

        .logo-container:hover {
            transform: translateY(-5px);
        }

        .logo-container a {
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logo-container i {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Logo Container -->
    <div class="logo-container">
        <a href="acceuil.php">
            <i class="fas fa-brain"></i>
            Savoirs Connectés
        </a>
    </div>

    <!-- Cards Container -->
    <div class="container">
        <!-- Card Étudiant -->
        <div class="card">
        <i class="fas fa-user-graduate icon"></i>
        <h3>Connexion Étudiant</h3>
            <p>Connectez-vous pour accéder à vos travaux académiques et collaborer avec d'autres étudiants.</p>
            <a href="connexion.php?type=etudiant" class="btn">Se connecter</a>
        </div>

        <!-- Card Directeur de Mémoire -->
        <div class="card">
        <i class="fas fa-chalkboard-teacher icon"></i>
        <h3>Connexion Directeur</h3>
            <p>Connectez-vous pour gérer vos étudiants et superviser leurs travaux académiques.</p>
            <a href="connexion.php?type=directeur" class="btn">Se connecter</a>
        </div>
    </div>
</body>
</html>