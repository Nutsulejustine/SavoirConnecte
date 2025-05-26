<?php include 'action.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Directeurs de Mémoire - Savoirs Connectés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      margin-bottom: 20px;
    }

    .card-container {
      max-width: 800px;
      margin: 20px auto;
    }

    .card-img-top {
      height: 150px;
      /* hauteur fixe pour les images */
      object-fit: cover;
      /* ajustement de l'image */
    }

    .btn {
      background-color: #3498db;
    }

    /* Style pour le bouton Inbox */
    .inbox-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      background: none;
      border: none;
      cursor: pointer;
      color: #3498db;
      font-size: 24px;
    }

    /* Style pour la liste des discussions */
    .inbox-list {
      position: fixed;
      top: 50px;
      right: 10px;
      width: 300px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      z-index: 1001;
      display: none;
      padding: 10px;
    }

    .inbox-list ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .inbox-list li {
      padding: 10px;
      border-bottom: 1px solid #eee;
      cursor: pointer;
    }

    .inbox-list li:last-child {
      border-bottom: none;
    }

    .inbox-list li:hover {
      background-color: #f0f0f0;
    }
  </style>
</head>

<body>

  <!-- Barre de navigation -->
  <div class="content">
    <h2>Rechercher un Directeur de Mémoire</h2>

    <!-- Barre de recherche -->
    <div style="text-align: center; margin-bottom: 20px;">
      <input type="text" placeholder="Rechercher une thématique..."
        style="width: 50%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
      <button
        style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">Rechercher</button>
    </div>
    <div class="card-container">

      <div class="row">
        <!-- Directeur 1 -->
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Directeur 1">
            <div class="card-body">
              <h5 class="card-title">Dr. Jean Dupont</h5>
              <p class="card-text">Expert en IA.</p>
              <button onclick="openChat('Jean Dupont')" class="btn btn-primary">Voir Profil</button>
              <button onclick="openChat('Jean Dupont')" class="btn btn-primary">
                <i class="fas fa-comments"></i> Chat
              </button>
            </div>
          </div>
        </div>

        <!-- Directeur 2 -->
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Directeur 2">
            <div class="card-body">
              <h5 class="card-title">Dr. Marie Curie</h5>
              <p class="card-text">Experte en Chimie.</p>
              <button onclick="openChat('Marie Curie')" class="btn btn-primary">Voir Profil</button>
              <button onclick="openChat('Marie Curie')" class="btn btn-primary">
                <i class="fas fa-comments"></i> Chat
              </button>
            </div>
          </div>
        </div>

        <!-- Directeur 3 -->
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Directeur 3">
            <div class="card-body">
              <h5 class="card-title">Dr. Albert Einstein</h5>
              <p class="card-text">Expert en Physique.</p>
              <button onclick="openChat('Albert Einstein')" class="btn btn-primary">Voir Profil</button>
              <button onclick="openChat('Albert Einstein')" class="btn btn-primary">
                <i class="fas fa-comments"></i> Chat
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Inbox Button -->
  <button class="inbox-btn" onclick="toggleInbox()">
    <i class="fas fa-envelope"></i>
  </button>

  <!-- Inbox List -->
  <div id="inbox-list" class="inbox-list">
    <ul>
      <li onclick="openDiscussion('Jean Dupont')">Discussion avec Jean Dupont</li>
      <li onclick="openDiscussion('Marie Curie')">Discussion avec Marie Curie</li>
      <li onclick="openDiscussion('Albert Einstein')">Discussion avec Albert Einstein</li>
    </ul>
  </div>

  <!-- Chat Window -->
  <div id="chat-window" style="display: none; position: fixed; bottom: 20px; right: 20px; width: 400px; height: 350px; background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); z-index: 1000;">
    <div style="background: #3498db; color: white; padding: 10px; border-radius: 10px 10px 0 0; display: flex; justify-content: space-between; align-items: center;">
      <span id="chat-title">Chat avec le Directeur</span>
      <button onclick="closeChat()" style="background: none; border: none; color: white; cursor: pointer;">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <div id="chat-messages" style="height: 250px; overflow-y: auto; padding: 10px;"></div>
    <div style="padding: 10px; border-top: 1px solid #eee;">
      <input type="text" id="message-input" placeholder="Écrivez votre message..." style="width: 80%; padding: 5px; border: 1px solid #ccc; border-radius: 5px;">
      <button onclick="sendMessage()" style="width: 15%; padding: 5px; background: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer;">
        <i class="fas fa-paper-plane"></i>
      </button>
    </div>
  </div>

  <script>
    function openChat(directorName) {
      document.getElementById('chat-title').innerText = `Chat avec ${directorName}`;
      document.getElementById('chat-window').style.display = 'block';
    }

    function closeChat() {
      document.getElementById('chat-window').style.display = 'none';
    }

    function sendMessage() {
      const input = document.getElementById('message-input');
      const message = input.value;
      if (message.trim() === '') return;

      const chatMessages = document.getElementById('chat-messages');

      // Ajouter le message de l'utilisateur
      chatMessages.innerHTML += `
        <div style="margin-bottom: 10px; text-align: right;">
          <span style="background: #3498db; color: white; padding: 5px 10px; border-radius: 10px; display: inline-block;">
            ${message}
          </span>
        </div>
    `;

      // Simuler une réponse automatique
      setTimeout(() => {
        chatMessages.innerHTML += `
            <div style="margin-bottom: 10px; text-align: left;">
              <span style="background: #eee; padding: 5px 10px; border-radius: 10px; display: inline-block;">
                Je suis le chatbot du directeur. Je vous répondrai dès que possible.
              </span>
            </div>
        `;
        chatMessages.scrollTop = chatMessages.scrollHeight;
      }, 1000);

      input.value = '';
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    // Permettre l'envoi du message avec la touche Entrée
    document.getElementById('message-input').addEventListener('keypress', function (e) {
      if (e.key === 'Enter') {
        sendMessage();
      }
    });

    function toggleInbox() {
      const inboxList = document.getElementById('inbox-list');
      inboxList.style.display = inboxList.style.display === 'none' ? 'block' : 'none';
    }

    function openDiscussion(directorName) {
      // Rediriger vers la page de discussion avec le directeur
      window.location.href = `discussion.php?director=${directorName}`;
    }
  </script>
</body>

</html>



