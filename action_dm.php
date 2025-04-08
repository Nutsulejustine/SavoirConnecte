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
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1><i class="fas fa-brain"></i>
        Savoirs Connectés</h1>
        <p>Partagez vos connaissances et accédez à une bibliothèque de documents.</p>
        <nav>
            <a href="demande.php">Liste des Demandes</a>
            <a href="profildm.php">Profil</a>
        </nav>
    </header>

    <!-- Content -->
    <div class="content">
    </div>
</body>
</html>