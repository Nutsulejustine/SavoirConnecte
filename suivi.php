<?php include 'action.php'; ?>
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

    <!-- Barre de navigation -->
    <div class="content">
        <h2>Suivi du Rapport</h2>
        <div class="step-bar">
            <div class="step active" onclick="showForm('step1')">Etape 1</div>
            <div class="step" onclick="showForm('step2')">Etape 2</div>
            <div class="step" onclick="showForm('step3')">Etape 3</div>
            <div class="step" onclick="showForm('step4')">Etape 4</div>
        </div>

        <!-- Formulaire Chapitre 1 -->
        <div id="step1" class="form-container active">
            <div class="form-style">
                <h3>Chapitre 1</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Avez-vous terminé le chapitre ?</label>
                        <select class="form-select">
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Commentaire sur la pédagogie du DM et son apport pour l’avancement du
                            rapport</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Votre avis par rapport aux défis de 3 semaines de rédaction du
                            chap1</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Les difficultés rencontrées</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Formulaire Chapitre 2 -->
        <div id="step2" class="form-container">
            <div class="form-style">
                <h3>Chapitre 2</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Avez-vous terminé le chapitre ?</label>
                        <select class="form-select">
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Commentaire sur la pédagogie du DM et son apport pour l’avancement du
                            rapport</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Votre avis par rapport aux défis de 3 semaines de rédaction du
                            chap2</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Les difficultés rencontrées</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Formulaire Chapitre 3 -->
        <div id="step3" class="form-container">
            <div class="form-style">
                <h3>Chapitre 3</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Avez-vous terminé le chapitre ?</label>
                        <select class="form-select">
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Commentaire sur la pédagogie du DM et son apport pour l’avancement du
                            rapport</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Votre avis par rapport aux défis de 3 semaines de rédaction du
                            chap3</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Les difficultés rencontrées</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Formulaire Chapitre 4 -->
        <div id="step4" class="form-container">
            <div class="form-style">
                <h3>Chapitre 4</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Commentaire générale sur le déroulement </label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showForm(stepId) {
            // Désactiver tous les formulaires
            let forms = document.querySelectorAll('.form-container');
            forms.forEach(form => form.classList.remove('active'));

            // Activer le formulaire correspondant
            document.getElementById(stepId).classList.add('active');

            // Mettre à jour la barre d'étape
            let steps = document.querySelectorAll('.step');
            steps.forEach(step => step.classList.remove('active'));
            document.querySelector(`.step[onclick="showForm('${stepId}')"]`).classList.add('active');
        }
    </script>

</body>

</html>