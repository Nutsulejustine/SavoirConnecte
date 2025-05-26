<?php include 'action_dm.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi du Rapport - Savoirs Connectés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .step-bar {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .step {
            width: 25%;
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            background-color: #f0f0f0;
        }

        .step.active {
            background-color: #3498db;
            color: white;
        }

        .form-container {
            display: none;
            margin-bottom: 20px;
        }

        .form-container.active {
            display: block;
        }

        /* Styles pour les formulaires */
        .form-style {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-style .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-style .form-control,
        .form-style .form-select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-style .btn-primary {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

        <!-- Formulaire Chapitre 1 -->
        <div id="step1" class="form-container active">
            <div class="form-style">
                <h3>Suivi du rapport</h3>
                <form>
                    
                    <div class="mb-3">
                        <label class="form-label">Quelle difficulté rencontrez-vous avec l’étudiant ?</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">A quel niveau du rapport êtes-vous ?</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Commentaires</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>

       


</body>

</html>