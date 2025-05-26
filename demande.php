<?php include 'action_dm.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande</title>
    <!-- Votre code existant ici -->

    <!-- Début du code à ajouter pour la fonctionnalité de chat -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Styles pour l'icône de chat */
        .chat-icon-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            /* Pour s'assurer qu'il est au-dessus des autres éléments */
        }

        .chat-icon-button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* Styles pour la liste des discussions (initialement cachée) */
        .chat-list {
            display: none;
            position: fixed;
            bottom: 80px;
            /* Ajusté pour laisser de l'espace pour l'icône */
            right: 20px;
            width: 300px;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 999;
        }

        .chat-list.show {
            display: block;
            /* Affiche la liste quand la classe 'show' est ajoutée */
        }

        .chat-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .chat-list li {
            padding: 10px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
        }

        .chat-list li:hover {
            background-color: #e9ecef;
        }

        /* Styles pour la zone de discussion */
        .chat-window {
            display: none;
            position: fixed;
            bottom: 80px;
            /* Ajusté pour laisser de l'espace pour l'icône */
            right: 20px;
            width: 500px;
            /* Largeur augmentée */
            height: 300px;
            /* Hauteur réduite */
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 998;
            padding: 10px;
            overflow-y: scroll;
            display: flex;
            /* Ajout de flexbox */
            flex-direction: column;
            /* Pour organiser le contenu verticalement */
        }

        .chat-window.show {
            display: flex;
            /* Correction ici */
        }

        .message {
            padding: 8px 12px;
            border-radius: 10px;
            margin-bottom: 5px;
        }

        .message.sent {
            background-color: #dcf8c6;
            align-self: flex-end;
        }

        .message.received {
            background-color: #fff;
            align-self: flex-start;
        }

        .chat-input-area {
            display: flex;
            margin-top: auto;
            /* Pousse la zone de saisie vers le bas */
        }

        .chat-input {
            flex-grow: 1;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .send-button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            margin-left: 5px;
        }

        .back-to-inbox {
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        /* Style pour le bouton de fermeture */
        .close-button {
            position: absolute;
            top: 5px;
            right: 5px;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: black;
            /* Icône en blanc */
            z-index: 1001;
            /* S'assure que le bouton est au-dessus des autres éléments */
            padding: 0;
            /* Suppression du padding */
            line-height: 1;
            /* Ajustement de la hauteur de ligne */
        }

        .close-button i {
            display: block;
            /* S'assure que l'icône prend toute la place */
        }
    </style>
    <!-- Fin du code à ajouter pour la fonctionnalité de chat -->
</head>

<body>

    <!-- Votre code existant ici -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 20px;">
        <!-- Demande 1 -->
        <div
            style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; padding: 20px;">
            <h3>Demande de Jean Dupont</h3>
            <p>Objet : Demande de validation du sujet de mémoire</p>
            <div style="display: flex; justify-content: space-around; margin-top: 20px;">
                <button
                    style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Accepter</button>
                <button
                    style="background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Refuser</button>
            </div>
        </div>

        <!-- Demande 2 -->
        <div
            style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; padding: 20px;">
            <h3>Demande de Marie Curie</h3>
            <p>Objet : Demande de modification du sujet de mémoire</p>
            <div style="display: flex; justify-content: space-around; margin-top: 20px;">
                <button
                    style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Accepter</button>
                <button
                    style="background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Refuser</button>
            </div>
        </div>

        <!-- Demande 3 -->
        <div
            style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); width: 300px; text-align: center; padding: 20px;">
            <h3>Demande de Albert Einstein</h3>
            <p>Objet : Demande d'ajout d'un co-encadrant</p>
            <div style="display: flex; justify-content: space-around; margin-top: 20px;">
                <button
                    style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Accepter</button>
                <button
                    style="background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Refuser</button>
            </div>
        </div>
    </div>

    <!-- Début du code à ajouter pour la fonctionnalité de chat -->
    <!-- Conteneur de l'icône de chat -->
    <div class="chat-icon-container">
        <button class="chat-icon-button" id="chat-icon">
            <i class="fas fa-comments"></i>
        </button>
    </div>

    <!-- Liste des discussions (cachée par défaut) -->
    <div class="chat-list" id="chat-list">
        <ul>
            <li data-chat-id="1">Discussion avec Jean</li>
            <li data-chat-id="2">Discussion avec Marie</li>
            <!-- Ajoutez d'autres discussions ici -->
        </ul>
    </div>

    <!-- Fenêtre de discussion (cachée par défaut) -->
    <div class="chat-window" id="chat-window" style="display: none;">
        <button class="close-button" id="close-chat-window">
            <i class="fas fa-times"></i>
        </button>
        <button class="back-to-inbox" id="back-to-inbox">Retour à l'inbox</button>
        <div id="chat-messages">
            <!-- Les messages seront ajoutés ici par JavaScript -->
        </div>
        <div class="chat-input-area">
            <input type="text" id="message-input" class="chat-input" placeholder="Écrire un message...">
            <button class="send-button" id="send-button">Envoyer</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const chatIcon = document.getElementById('chat-icon');
            const chatList = document.getElementById('chat-list');
            const chatWindow = document.getElementById('chat-window');
            const chatMessages = document.getElementById('chat-messages');
            const messageInput = document.getElementById('message-input');
            const sendButton = document.getElementById('send-button');
            const backToInboxButton = document.getElementById('back-to-inbox');
            const closeChatWindowButton = document.getElementById('close-chat-window');

            let currentChatId = null; // Variable pour suivre l'ID de la discussion active
            let chatWindowVisible = false; // Variable pour suivre l'état de la fenêtre de chat

            // Fonction pour afficher/masquer la liste des discussions
            chatIcon.addEventListener('click', function () {
                if (chatWindowVisible) {
                    // Si la fenêtre de chat est visible, la fermer
                    chatWindow.style.display = 'none';
                    chatList.classList.remove('show'); // Assurez-vous que la liste est cachée
                    chatWindowVisible = false;
                } else {
                    // Sinon, afficher la liste des discussions
                    chatList.classList.toggle('show');
                }
            });

            // Fonction pour charger les messages d'une discussion
            function loadChat(chatId) {
                currentChatId = chatId; // Mettre à jour l'ID de la discussion active
                chatMessages.innerHTML = ''; // Effacer les messages précédents

                // Simuler le chargement des messages depuis une source de données
                const messages = getMessagesForChat(chatId); // Utilisez une fonction pour récupérer les messages
                messages.forEach(message => {
                    const messageElement = document.createElement('div');
                    messageElement.classList.add('message');
                    messageElement.classList.add(message.sender === 'me' ? 'sent' : 'received');
                    messageElement.textContent = message.text;
                    chatMessages.appendChild(messageElement);
                });

                // Afficher la fenêtre de chat et masquer la liste
                chatList.classList.remove('show');
                chatWindow.style.display = 'flex';
                chatWindowVisible = true; // Mettre à jour l'état de la fenêtre de chat

                // Faire défiler vers le bas pour afficher les nouveaux messages
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            // Fonction pour simuler la récupération des messages depuis une source de données
            function getMessagesForChat(chatId) {
                // Remplacez ceci par votre propre logique pour récupérer les messages
                if (chatId === '1') {
                    return [
                        { sender: 'me', text: 'Salut !' },
                        { sender: 'other', text: 'Bonjour !' }
                    ];
                } else if (chatId === '2') {
                    return [
                        { sender: 'me', text: 'Comment ça va ?' },
                        { sender: 'other', text: 'Bien, merci !' }
                    ];
                } else {
                    return [];
                }
            }

            // Gestion du clic sur une discussion dans la liste
            chatList.addEventListener('click', function (event) {
                if (event.target.tagName === 'LI') {
                    const chatId = event.target.dataset.chatId;
                    loadChat(chatId);
                }
            });

            // Gestion de l'envoi d'un message
            sendButton.addEventListener('click', function () {
                const messageText = messageInput.value.trim();
                if (messageText !== '') {
                    // Créer un nouvel élément de message
                    const messageElement = document.createElement('div');
                    messageElement.classList.add('message');
                    messageElement.classList.add('sent');
                    messageElement.textContent = messageText;
                    chatMessages.appendChild(messageElement);

                    // Envoyer le message (simulé ici)
                    sendMessage(currentChatId, messageText);

                    // Effacer le champ de saisie
                    messageInput.value = '';

                    // Faire défiler vers le bas pour afficher le nouveau message
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }
            });

            // Fonction pour simuler l'envoi d'un message
            function sendMessage(chatId, messageText) {
                // Remplacez ceci par votre propre logique pour envoyer le message
                console.log(`Message envoyé à la discussion ${chatId}: ${messageText}`);
            }

            // Gestion du clic sur le bouton "Retour à l'inbox"
            backToInboxButton.addEventListener('click', function () {
                chatWindow.style.display = 'none';
                chatList.classList.add('show');
                chatWindowVisible = false; // Mettre à jour l'état de la fenêtre de chat
            });

            // Gestion du clic sur le bouton de fermeture
            closeChatWindowButton.addEventListener('click', function () {
                chatWindow.style.display = 'none';
                chatWindowVisible = false; // Mettre à jour l'état de la fenêtre de chat
            });
        });
    </script>
    <!-- Fin du code à ajouter pour la fonctionnalité de chat -->

</body>

</html>