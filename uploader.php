<?php include 'action.php'; ?>

<div style="display: flex; justify-content: center; align-items: center; height: 80vh;">
    <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 50%; padding: 20px;">
        <h2 class="mb-4 text-center" style="color: #3498db;">Uploader un Document</h2>
        <form>
            <div class="mb-3" style="margin-bottom: 20px;">
                <label for="title" class="form-label" style="font-weight: bold; color: #2c3e50;">Titre du Document</label>
                <input type="text" class="form-control" id="title" placeholder="Titre du document" required style="width: 90%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div class="mb-3" style="margin-bottom: 20px;">
                <label for="author" class="form-label" style="font-weight: bold; color: #2c3e50;">Auteur</label>
                <input type="text" class="form-control" id="author" placeholder="Nom de l'auteur" required style="width: 90%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div class="mb-3" style="margin-bottom: 20px;">
                <label for="file" class="form-label" style="font-weight: bold; color: #2c3e50;">Choisissez un fichier</label>
                <input type="file" class="form-control" id="file" required style="width: 90%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div class="mb-3" style="margin-bottom: 20px;">
                <label for="domain" class="form-label" style="font-weight: bold; color: #2c3e50;">Domaine</label>
                <select class="form-select" id="domain" required style="width: 90%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="" disabled selected>Sélectionnez un domaine</option>
                    <option value="science">Science</option>
                    <option value="mathematiques">Mathématiques</option>
                    <option value="physique">Physique</option>
                    <option value="humanites">Humanités</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100" style="background-color: #3498db; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">Uploader</button>
        </form>
    </div>
</div>