<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savoirs Connectés - Partagez vos travaux académiques</title>
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2c3e50;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: var(--dark);
            line-height: 1.6;
        }
        
        header {
            background-color: var(--primary);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--light);
        }
        
        .hero {
            background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7)), url('/api/placeholder/1200/600') center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 30px;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--accent);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #c0392b;
        }
        
        .features {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            font-size: 2.2rem;
            color: var(--secondary);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            background-color: var(--primary);
            color: white;
            font-size: 2rem;
            padding: 20px;
            text-align: center;
        }
        
        .feature-content {
            padding: 20px;
        }
        
        .feature-content h3 {
            margin-bottom: 15px;
            color: var(--secondary);
        }
        
        .how-it-works {
            background-color: var(--light);
            padding: 80px 0;
        }
        
        .steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            counter-reset: step-counter;
        }
        
        .step {
            flex: 0 0 calc(33.333% - 30px);
            margin: 15px;
            position: relative;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            counter-increment: step-counter;
        }
        
        .step::before {
            content: counter(step-counter);
            position: absolute;
            top: -20px;
            left: 20px;
            width: 40px;
            height: 40px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        .pricing {
            padding: 80px 0;
        }
        
        .pricing-plans {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        
        .plan {
            flex: 0 0 300px;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .plan:hover {
            transform: scale(1.03);
        }
        
        .plan-header {
            background-color: var(--secondary);
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .plan-price {
            font-size: 2rem;
            margin: 20px 0;
        }
        
        .plan-price span {
            font-size: 1rem;
            opacity: 0.8;
        }
        
        .plan-features {
            padding: 20px;
            list-style: none;
        }
        
        .plan-features li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        
        .plan-features li:last-child {
            border-bottom: none;
        }
        
        .plan-cta {
            text-align: center;
            padding: 20px;
        }
        
        .testimonials {
            background-color: var(--secondary);
            color: white;
            padding: 80px 0;
        }
        
        .testimonials .section-title {
            color: white;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            position: relative;
        }
        
        .testimonial-text {
            margin-bottom: 20px;
            font-style: italic;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            overflow: hidden;
        }
        
        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-info h4 {
            margin-bottom: 5px;
        }
        
        footer {
            background-color: var(--dark);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-column h3 {
            margin-bottom: 20px;
            font-size: 1.2rem;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            color: white;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: var(--primary);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bdc3c7;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .step {
                flex: 0 0 100%;
            }
            
            .nav-links {
                display: none;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <i class="fas fa-brain"></i>
                    Savoirs Connectés
                </div>
                <ul class="nav-links">
                    <li><a href="#features">Fonctionnalités</a></li>
                    <li><a href="#how-it-works">Comment ça marche</a></li>
                    <li><a href="#pricing">Tarifs</a></li>
                    <li><a href="#testimonials">Témoignages</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="choix.php" class="btn">Connexion</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Valorisez vos travaux académiques</h1>
            <p>Savoirs Connectés est une plateforme innovante dédiée au partage, à la valorisation et à la protection des travaux académiques. Rejoignez notre communauté et donnez de la visibilité à vos recherches.</p>
            <a href="inscription.php" class="btn">S'inscrire gratuitement</a>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Nos fonctionnalités</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Monétisation</h3>
                        <p>Générez des revenus grâce à vos travaux académiques. Choisissez entre un système d'abonnement ou de crédits pour valoriser vos recherches.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Protection des droits</h3>
                        <p>Protégez vos œuvres avec des filigranes numériques et des licences personnalisées pour éviter le plagiat et l'usage non autorisé.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Échanges inter-universitaires</h3>
                        <p>Connectez-vous avec d'autres chercheurs et étudiants, partagez des idées et collaborez sur des projets interdisciplinaires.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-vr-cardboard"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Réalité augmentée</h3>
                        <p>Présentez vos travaux de manière interactive grâce à des fonctionnalités de réalité augmentée qui rendent l'apprentissage plus engageant.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Visibilité accrue</h3>
                        <p>Augmentez la portée de vos recherches grâce à notre moteur de recherche optimisé et nos outils de promotion académique.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laugh-squint"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Générateur de memes</h3>
                        <p>Rendez la science amusante avec notre générateur de memes académiques, parfait pour vulgariser des concepts complexes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <h2 class="section-title">Comment ça marche</h2>
            <div class="steps">
                <div class="step">
                    <h3>Créez votre compte</h3>
                    <p>Inscrivez-vous gratuitement et créez votre profil académique en quelques clics. Ajoutez vos informations et domaines d'expertise.</p>
                </div>
                <div class="step">
                    <h3>Téléchargez vos travaux</h3>
                    <p>Partagez vos thèses, rapports et soutenances. Définissez les paramètres de protection et de monétisation selon vos préférences.</p>
                </div>
                <div class="step">
                    <h3>Partagez et gagnez</h3>
                    <p>Donnez de la visibilité à vos recherches, interagissez avec la communauté académique et générez des revenus grâce à vos contributions.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing" id="pricing">
        <div class="container">
            <h2 class="section-title">Nos offres</h2>
            <div class="pricing-plans">
                <div class="plan">
                    <div class="plan-header">
                        <h3>Gratuit</h3>
                        <div class="plan-price">
                            0 <span>XOF</span>
                        </div>
                    </div>
                    <ul class="plan-features">
                        <li>Créer un profil académique</li>
                        <li>Consultation limitée des travaux</li>
                        <li>Fonctionnalités sociales de base</li>
                        <li>Publicités incluses</li>
                        <li>Protection basique</li>
                    </ul>
                    <div class="plan-cta">
                        <a href="#" class="btn">Commencer</a>
                    </div>
                </div>
                <div class="plan">
                    <div class="plan-header">
                        <h3>Standard</h3>
                        <div class="plan-price">
                            5000 <span>XOF/mois</span>
                        </div>
                    </div>
                    <ul class="plan-features">
                        <li>Accès illimité aux travaux</li>
                        <li>Aucune publicité</li>
                        <li>Protection avancée</li>
                        <li>Statistiques de consultation</li>
                        <li>Fonctionnalités sociales complètes</li>
                    </ul>
                    <div class="plan-cta">
                        <a href="#" class="btn">S'abonner</a>
                    </div>
                </div>
                <div class="plan">
                    <div class="plan-header">
                        <h3>Crédits</h3>
                        <div class="plan-price">
                            250 <span>XOF/crédit</span>
                        </div>
                    </div>
                    <ul class="plan-features">
                        <li>Paiement à l'utilisation</li>
                        <li>10 crédits = 1 document premium</li>
                        <li>Réduction pour achats groupés</li>
                        <li>Protection standard</li>
                        <li>Validité des crédits: 1 an</li>
                    </ul>
                    <div class="plan-cta">
                        <a href="#" class="btn">Acheter des crédits</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2 class="section-title">Témoignages</h2>
            <div class="testimonial-grid">
                <div class="testimonial">
                    <div class="testimonial-text">
                        "Grâce à Savoirs Connectés, ma thèse a été consultée plus de 500 fois en un mois. J'ai même été contacté par un laboratoire international pour une collaboration."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="/api/placeholder/50/50" alt="Avatar">
                        </div>
                        <div class="author-info">
                            <h4>Dr. Aminata Diop</h4>
                            <p>Chercheuse en biochimie</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        "La protection par filigrane m'a rassuré quant au partage de mes travaux. J'ai pu générer des revenus tout en gardant le contrôle sur mes recherches."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="/api/placeholder/50/50" alt="Avatar">
                        </div>
                        <div class="author-info">
                            <h4>Prof. Moussa Sall</h4>
                            <p>Enseignant-chercheur</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        "En tant que bibliothécaire universitaire, je recommande Savoirs Connectés à tous nos étudiants. C'est une ressource inestimable pour la recherche académique."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="/api/placeholder/50/50" alt="Avatar">
                        </div>
                        <div class="author-info">
                            <h4>Mme Fatou Ndiaye</h4>
                            <p>Bibliothécaire universitaire</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Savoirs Connectés</h3>
                    <p>Une plateforme innovante pour valoriser et protéger les travaux académiques tout en créant une communauté de chercheurs engagés.</p>
                </div>
                <div class="footer-column">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#features">Fonctionnalités</a></li>
                        <li><a href="#pricing">Tarifs</a></li>
                        <li><a href="#testimonials">Témoignages</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Légal</h3>
                    <ul class="footer-links">
                        <li><a href="#">Conditions d'utilisation</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Droits d'auteur</a></li>
                        <li><a href="#">Mentions légales</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contactez-nous</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-envelope"></i> contact@savoirsconnectes.com</li>
                        <li><i class="fas fa-phone"></i> +221 XX XXX XX XX</li>
                        <li><i class="fas fa-map-marker-alt"></i> Dakar, Sénégal</li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2025 Savoirs Connectés. Tous droits réservés.
            </div>
        </div>
    </footer>
</body>
</html>
