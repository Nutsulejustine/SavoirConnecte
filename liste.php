<?php include 'action.php'; ?>
<div class="content">
    <h2>Liste des Documents</h2>

    <!-- Barre de recherche -->
    <div style="text-align: center; margin-bottom: 20px;">
        <input type="text" placeholder="Rechercher un document..." style="width: 50%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">Rechercher</button>
    </div>

    <!-- Liste des documents -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
        <!-- Document 1 -->
        <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; padding: 20px;">
            <h3>Document 1</h3>
            <p>Description du document 1.</p>
            <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">Télécharger</button>
        </div>

        <!-- Document 2 -->
        <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; padding: 20px;">
            <h3>Document 2</h3>
            <p>Description du document 2.</p>
            <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">Télécharger</button>
        </div>

        <!-- Document 3 -->
        <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; padding: 20px;">
            <h3>Document 3</h3>
            <p>Description du document 3.</p>
            <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">Télécharger</button>
        </div>
    </div>
</div>