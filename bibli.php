<?php include 'action.php'; ?>
<div class="content">
    <h2>Bibliothèque</h2>
    <style>
    .card-img-top {
      height: 150px; /* hauteur fixe pour les images */
      object-fit: cover; /* ajustement de l'image */
    }</style>

    <!-- Barre de recherche -->
    <div style="text-align: center; margin-bottom: 20px;">
        <input type="text" placeholder="Rechercher un document..." style="width: 50%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">Rechercher</button>
    </div>

    <!-- Liste des documents -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
        <!-- Document 1 -->
        <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; padding: 20px;">
        <img src="uploads/5 "  class="card-img-top" alt="Dr. Jean Dupont">
        <h5 class="card-title">Auteur: ABALO KOffi</h5>
          <h3>La transformation digitale des entreprises traditionnelles</h3>
            <p>Description: <br> Cette thèse explore comment les petites et moyennes entreprises, souvent ancrées dans des méthodes de gestion classiques, adoptent les outils numériques pour améliorer leur productivité, leur visibilité et leur compétitivité.</p>
            <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">  <a href="acheterCredit.php">Télécharger</button></a>
        </div>

        <!-- Document 2 -->
        <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; padding: 20px;">
        <img src="uploads/6 "  class="card-img-top" alt="Dr. Jean Dupont">
        <h5 class="card-title">Auteur: Aimer Adonnon</h5>
          <h3>La perception du mariage traditionnel chez les jeunes urbains</h3>
            <p>Description: <br>Cette recherche analyse comment les jeunes vivant en milieu urbain perçoivent et réinterprètent les pratiques traditionnelles liées au mariage, entre modernité, pression sociale et attachement culturel.</p>
            <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;"> <a href="acheterCredit.php">Télécharger</button></a>
        </div>

        <!-- Document 3 -->
        <div style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; padding: 20px;">
        <img src="uploads/4 "  class="card-img-top" alt="Dr. Jean Dupont">
        <h5 class="card-title">Auteur: Aloviou Hate</h5>
        <h3>L’usage des réseaux sociaux dans la sensibilisation sur la santé mentale</h3>
        <p>Description: <br> Cette étude s'intéresse à la manière dont les campagnes en ligne, notamment sur Facebook, Instagram ou TikTok, contribuent à informer et à réduire la stigmatisation liée aux troubles mentaux.</p>
            <button style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;" a href="acheterCredit.php" > <a href="acheterCredit.php">Télécharger</button></a>
        </div>
    </div>
</div>