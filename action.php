<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savoirs Connectés</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        /* Slider */
        .slider {
            position: relative;
            width: 100%;
            height: 300px; /* Hauteur fixe pour la bannière */
            overflow: hidden;
        }

        .slides {
            display: flex;
            width: 300%;
            height: 100%;
            animation: slide 100s infinite;
        }

        .slides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @keyframes slide {
            0%   { transform: translateX(0%); }
            33%  { transform: translateX(-100%); }
            66%  { transform: translateX(-200%); }
            100% { transform: translateX(0%); }
        }

        .content {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1><i class="fas fa-brain"></i> Savoirs Connectés</h1>
        <p>Partagez vos connaissances et accédez à une bibliothèque de documents.</p>
        <nav>
            <a href="liste.php">Liste des Docs</a>
            <a href="bibli.php">bibliothèque</a>
            <a href="thematique.php">Thématiques</a>
            <a href="uploader.php">Upload de Doc</a>
            <a href="DM.php">Directeur de Mémoire</a>
            <a href="rapport.php">Rapports</a>
            
        </nav>
    </header>

    <!-- Slider -->
    <div class="slider">
        <div class="slides">
            <img src="uploads/7.jpeg" alt="Image 1">
            <img src="uploads/8.jpg" alt="Image 2">
            <img src="uploads/9.jpeg" alt="Image 3">
            <img src="uploads/10.jpeg" alt="Image 2">
            <img src="uploads/11.jpg" alt="Image 3">
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Bienvenue sur la plateforme Savoirs Connectés</h2>
        <p>Explorez les documents, thématiques et outils pour enrichir vos connaissances.</p>
    </div>
</body>
</html>
