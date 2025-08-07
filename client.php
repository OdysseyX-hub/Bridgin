<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRIDG'IN SOLUTIONS - Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Acceuil.css">
    <style>
          
        
        :root {
            --vert-primaire: #2ecc71;
            --bleu-primaire: #3498db;
            --noir: #2c3e50;
            --blanc: #ffffff;
            --gris-fonce: #34495e;
            --gris-clair: #ecf0f1;
            --rouge: #e74c3c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--noir);
            background-color: var(--gris-clair);
            line-height: 1.6;
            overflow-x: hidden;
        }

        header {
            background-color: var(--blanc);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .header-scrolled {
            padding: 10px 0;
            backdrop-filter: blur(10px);
            background-color: rgba(255,255,255,0.9);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--noir);
        }

        .logo span {
            color: var(--vert-primaire);
        }

        .menu {
            display: flex;
            list-style: none;
        }

        .menu li {
            margin-left: 30px;
            position: relative;
        }

        .menu a {
            text-decoration: none;
            color: var(--noir);
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .menu a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--vert-primaire);
            bottom: -5px;
            left: 0;
            transition: width 0.3s;
        }

        .menu a:hover::after {
            width: 100%;
        }

        .menu a:hover {
            color: var(--vert-primaire);
        }

        .mobile-menu-btn {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Styles des menus déroulants */
        .menu > li {
            position: relative;
        }

        .menu > li > a .fa-chevron-down {
            font-size: 12px;
            margin-left: 6px;
            transition: transform 0.3s;
        }

        .submenu, .simple-submenu {
            position: absolute;
            left: 0;
            top: 100%;
            background: white;
            width: 100%;
            min-width: 200px;
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 100;
        }

        .submenu {
            display: flex;
            padding: 20px;
            width: auto;
        }

        .submenu-column {
            padding: 0 15px;
            flex: 1;
        }

        .submenu h4 {
            color: var(--vert-primaire);
            margin-bottom: 10px;
            font-size: 16px;
        }

        .simple-submenu {
            padding: 10px 0;
        }

        .submenu li, .simple-submenu li {
            padding: 8px 20px;
        }

        .submenu a, .simple-submenu a {
            color: var(--noir);
            text-decoration: none;
            transition: all 0.3s;
            display: block;
        }

        .submenu a:hover, .simple-submenu a:hover {
            color: var(--vert-primaire);
            padding-left: 5px;
        }

        /* Animation au survol */
        .menu > li:hover > a .fa-chevron-down {
            transform: rotate(180deg);
        }

        .menu > li:hover .submenu,
        .menu > li:hover .simple-submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Style du bouton compte - Version améliorée */
        .account-menu {
            position: relative;
            display: inline-block;
            list-style: none;
            margin-left: 30px;
        }
        
        .account-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, var(--vert-primaire), var(--bleu-primaire));
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(46, 204, 113, 0.3);
        }
        
        .account-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.4);
        }
        
        .account-btn i {
            font-size: 16px;
            transition: transform 0.3s;
        }
        
        /* Style du sous-menu compte */
        .account-submenu {
            position: absolute;
            right: 0;
            top: 100%;
            background-color: white;
            min-width: 220px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            margin-top: 15px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 1000;
            list-style: none;
            padding: 10px 0;
        }
        
        .account-menu:hover .account-submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .account-menu:hover .account-btn i:last-child {
            transform: rotate(180deg);
        }
        
        .account-submenu li {
            border-bottom: 1px solid #f1f1f1;
        }
        
        .account-submenu li:last-child {
            border-bottom: none;
        }
        
        .account-submenu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: var(--noir);
            text-decoration: none;
            transition: all 0.2s;
        }
        
        .account-submenu a:hover {
            background-color: #f8f9fa;
            color: var(--bleu-primaire);
            padding-left: 25px;
        }
        
        .account-submenu a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            font-size: 14px;
        }
        
        /* Style spécifique pour le bouton de déconnexion */
        .account-submenu li:last-child a {
            color: var(--rouge);
        }
        
        .account-submenu li:last-child a:hover {
            background-color: #fdeaea;
            color: var(--rouge);
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
            
            .menu {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background-color: var(--blanc);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: all 0.5s ease;
                gap: 30px;
            }
            
            .menu.active {
                left: 0;
            }
            
            .menu li {
                margin-left: 0;
            }
            
            .account-menu {
                margin-left: 0;
                margin-top: 20px;
            }
            
            .account-btn {
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo">BRIDG'<span>IN</span></div>
                <ul class="menu" id="menu">
    <li><a href="client.php">Accueil</a></li>
    
    <li>
        <a href="#">Solutions <i class="fas fa-chevron-down"></i></a>
        <div class="submenu">
            <div class="submenu-column">
                <h4>Formations</h4>
                <ul>
                    <li><a href="catalogue.php">Catalogue</a></li>
                    <li><a href="#">Certifiantes</a></li>
                    <li><a href="#">Sur-mesure</a></li>
                </ul>
            </div>
            <div class="submenu-column">
                <h4>Conseil</h4>
                <ul>
                    <li><a href="#">Stratégie RH</a></li>
                    <li><a href="#">Transformation</a></li>
                </ul>
            </div>
        </div>
    </li>
    
    <li>
        <a href="#">Méthodologie <i class="fas fa-chevron-down"></i></a>
        <ul class="simple-submenu">
            <li><a href="#">Notre approche</a></li>
            <li><a href="#">Outils</a></li>
            <li><a href="#">Chiffres clés</a></li>
        </ul>
    </li>
    
    <li>
        <a href="#">Impact <i class="fas fa-chevron-down"></i></a>
    <ul class="simple-submenu">
            <li><a href="#">Témoignage</a></li>
            <li><a href="#">Etudes de cas </a></li>
            <li><a href="#">indicateurs</a></li>
        </ul>
    </li>

    <li>
        <a href="#">Ressources <i class="fas fa-chevron-down"></i></a>
        <ul class="simple-submenu">
            <li><a href="#">Blog</a></li>
            <li><a href="#">Webinars</a></li>
            <li><a href="#">Livres Blancs</a></li>
            <li><a href="#">FAQ</a></li>
        </ul>
    </li>
    <li>
        <a href="#">Actualités <i class="fas fa-chevron-down"></i></a>
        <ul class="simple-submenu">
            <li><a href="#">Agenda</a></li>
            <li><a href="#">tendances métiers</a></li>
            <li><a href="#">Newsletter</a></li>
        </ul>
    </li>
    <li>
        <a href="#">Contact <i class="fas fa-chevron-down"></i></a>
        <ul class="simple-submenu">
            <li><a href="#">Formulaire intelligent</a></li>
            <li><a href="#">chatbot</a></li>
            <li><a href="#">Prises de rendez-vous</a></li>
        </ul>
    </li>
     <!-- Menu Compte -->
     <li class="account-menu">
                        <button class="account-btn">
                            <i class="fas fa-user-circle"></i>
                            Mon compte
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <ul class="account-submenu">
                            <li>
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-certificate"></i>
                                    Attestations
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-book-open"></i>
                                    Formations
                                </a>
                            </li>
                            <li>
                                <a href="index.php">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Déconnexion
                                </a>
                            </li>
                        </ul>
                    </li>
    
    <script>
        // Optionnel : Ajouter une classe active au clic pour mobile
        document.querySelector('.account-btn').addEventListener('click', function() {
            this.parentElement.classList.toggle('active');
        });
        
        // Fermer le menu quand on clique ailleurs
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.account-menu')) {
                document.querySelector('.account-menu').classList.remove('active');
            }
        });
    </script>
</ul>       
                <div class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Notre ambition est votre réussite</h1>
            <p>Découvrez nos solutions sur-mesure en formation, conseil et team building pour transformer vos compétences et votre organisation</p>
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <form class="search-form">
                <div class="search-group">
                    <label for="domaine"><i class="fas fa-briefcase"></i> Domaine</label>
                    <select id="domaine">
                        <option value="">Choisissez votre métier</option>
                        <option value="rh">Ressources Humaines</option>
                        <option value="management">Management</option>
                        <option value="finance">Finance</option>
                        <option value="commerce">Commerce</option>
                    </select>
                </div>
                <div class="search-group">
                    <label for="competence"><i class="fas fa-star"></i> Compétence</label>
                    <input type="text" id="competence" placeholder="Ex: Leadership">
                </div>
                <div class="search-group">
                    <label for="objectif"><i class="fas fa-bullseye"></i> Objectif</label>
                    <select id="objectif">
                        <option value="">Choisissez un objectif</option>
                        <option value="evolution">Évolution de carrière</option>
                        <option value="reconversion">Reconversion</option>
                        <option value="competence">Renforcement de compétences</option>
                    </select>
                </div>
                <button type="submit" class="search-button">
                    <i class="fas fa-search"></i> Rechercher
                </button>
            </form>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Nos solutions</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="service-content">
                        <h3>Formations</h3>
                        <p>Développez vos compétences avec nos formations certifiantes adaptées à vos besoins professionnels.</p>
                        <a href="#" class="service-link">
                            Découvrir <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="service-content">
                        <h3>Conseil RH</h3>
                        <p>Accompagnement stratégique pour transformer vos défis RH en leviers de performance.</p>
                        <a href="#" class="service-link">
                            En savoir plus <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="service-content">
                        <h3>Dynamique d'équipe</h3>
                        <p>Renforcez la cohésion et la performance collective avec nos séminaires sur mesure.</p>
                        <a href="#" class="service-link">
                            Explorer <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Testimonials Section -->
<section class="testimonials">
    <div class="container">
        <div class="section-title">
            <h2>Ils nous font confiance</h2>
        </div>
        <div class="testimonial-horizontal">
            <div class="testimonial-slider">
                <div class="testimonial-item">
                    <p class="testimonial-text">"La formation en leadership a transformé ma manière de manager mon équipe avec des résultats concrets dès le premier mois."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">J</div>
                        <div>
                            <p class="author-name">Jordan</p>
                            <p class="author-position">Responsable RH</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p class="testimonial-text">"L'accompagnement stratégique nous a permis de restructurer efficacement notre département RH."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">J</div>
                        <div>
                            <p class="author-name">Jessy</p>
                            <p class="author-position">DRH</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p class="testimonial-text">"Les séminaires team building ont considérablement amélioré la cohésion de nos équipes."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">O</div>
                        <div>
                            <p class="author-name">Odyssée</p>
                            <p class="author-position">Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-nav">
    <button id="testimonial-prev"><i class="fas fa-chevron-left"></i></button>
    <button id="testimonial-next"><i class="fas fa-chevron-right"></i></button>
</div>
</section>
    
            <!-- Payment Section -->
        <section class="payment-section">
            <div class="container">
                <div class="section-title">
                    <h2>Paiement des formations</h2>
                </div>
                <div class="payment-options">
                    <div class="payment-card">
                        <i class="fas fa-credit-card"></i>
                        <h3>Paiement en ligne sécurisé</h3>
                        <p>Payez directement votre formation par carte bancaire</p>
                        <button class="payment-btn">Payer maintenant</button>
                    </div>
                    <div class="payment-card">
                        <i class="fas fa-file-invoice"></i>
                        <h3>Demande de devis</h3>
                        <p>Obtenez un devis personnalisé pour votre formation</p>
                        <button class="payment-btn">Demander un devis</button>
                    </div>
                    <div class="payment-card">
                        <i class="fas fa-handshake"></i>
                        <h3>Financement CPF</h3>
                        <p>Utilisez votre compte personnel de formation</p>
                        <button class="payment-btn">En savoir plus</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Choose Training Section -->
<section class="choose-training">
    <div class="container">
        <div class="section-title">
            <h2>Je choisis une formation</h2>
            <p>Trouvez la formation qui correspond à vos besoins professionnels</p>
        </div>
        <div class="training-filters">
            <div class="filter-group">
                <label for="training-domain"><i class="fas fa-filter"></i> Domaine</label>
                <select id="training-domain">
                    <option value="">Tous les domaines</option>
                    <option value="management">Management</option>
                    <option value="rh">Ressources Humaines</option>
                    <option value="finance">Finance</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="training-format"><i class="fas fa-laptop"></i> Format</label>
                <select id="training-format">
                    <option value="">Tous les formats</option>
                    <option value="presentiel">Présentiel</option>
                    <option value="online">En ligne</option>
                    <option value="hybride">Hybride</option>
                </select>
            </div>
            <button class="filter-btn">Filtrer</button>
        </div>
        <div class="training-grid">
            <!-- Les formations seront générées dynamiquement ici -->
            <div class="training-card">
                <div class="training-badge">Nouveau</div>
                <div class="training-image">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="training-content">
                    <h3>Leadership avancé</h3>
                    <div class="training-meta">
                        <span><i class="far fa-clock"></i> 24h</span>
                        <span><i class="fas fa-Francs-sign"></i> 20000 F CFA</span>
                    </div>
                    <p>Acquérez les compétences pour diriger des équipes performantes...</p>
                    <div class="training-actions">
                        <a href="#" class="details-btn">Détails</a>
                        <a href="choix.php" class="choose-btn">Choisir</a>
                    </div>
                </div>
            </div>
            <div class="training-card">
                <div class="training-badge">Nouveau</div>
                <div class="training-image">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="training-content">
                    <h3>Leadership avancé</h3>
                    <div class="training-meta">
                        <span><i class="far fa-clock"></i> 24h</span>
                        <span><i class="fas fa-Francs-sign"></i> 20000 F CFA</span>
                    </div>
                    <p>Acquérez les compétences pour diriger des équipes performantes...</p>
                    <div class="training-actions">
                        <a href="#" class="details-btn">Détails</a>
                        <a href="choix.php" class="choose-btn">Choisir</a>
                    </div>
                </div>
            </div>
            <div class="training-card">
                <div class="training-badge">Nouveau</div>
                <div class="training-image">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="training-content">
                    <h3>Leadership avancé</h3>
                    <div class="training-meta">
                        <span><i class="far fa-clock"></i> 24h</span>
                        <span><i class="fas fa-Francs-sign"></i> 20000 F CFA</span>
                    </div>
                    <p>Acquérez les compétences pour diriger des équipes performantes...</p>
                    <div class="training-actions">
                        <a href="#" class="details-btn">Détails</a>
                        <a href="choix.php" class="choose-btn">Choisir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Clients Section -->
    <section class="clients">
        <div class="container">
            <div class="section-title">
                <h2>Nos partenaires</h2>
            </div>
            <div class="clients-grid">
                <img src="https://via.placeholder.com/150x60?text=Client+1" alt="Client Logo" class="client-logo">
                <img src="https://via.placeholder.com/150x60?text=Client+2" alt="Client Logo" class="client-logo">
                <img src="https://via.placeholder.com/150x60?text=Client+3" alt="Client Logo" class="client-logo">
                <img src="https://via.placeholder.com/150x60?text=Client+4" alt="Client Logo" class="client-logo">
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <div class="section-title">
                <h2>Restez informé</h2>
                
            </div>
            <form class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Votre email professionnel" required>
                <button type="submit" class="newsletter-button">S'abonner</button>
            </form>
            <p>Abonnez-vous à notre newsletter pour recevoir nos dernières actualités et ressources exclusives</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>BRIDG'IN SOLUTIONS</h3>
                    <p>Notre ambition est votre réussite. Nous accompagnons les professionnels et les entreprises dans leur développement.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Solutions</h3>
                    <ul class="footer-links">
                        <li><a href="#">Formations professionnelles</a></li>
                        <li><a href="#">Conseil stratégique RH</a></li>
                        <li><a href="#">Team building</a></li>
                        <li><a href="#">Coaching individuel</a></li>
                        <li><a href="#">Formations sur mesure</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Entreprise</h3>
                    <ul class="footer-links">
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Notre équipe</a></li>
                        <li><a href="#">Méthodologie</a></li>
                        <li><a href="#">Rejoindre notre réseau</a></li>
                        <li><a href="#">Carrières</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-phone"></i> +237 677 11 47 58</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> contact@bridgincorp.com</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> Douala, Cameroun</a></li>
                        <li><a href="#"><i class="fas fa-clock"></i> Lun-Ven: 8h-18h</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 BRIDG'IN SOLUTIONS. Tous droits réservés. | <a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
            </div>
        </div>
    </footer>

    <!-- Help Bar -->
        <div class="help-bar">
        <!-- Bouton WhatsApp -->
        <button class="help-button whatsapp" id="whatsappBtn">
            <i class="fab fa-whatsapp"></i>
            <span class="tooltip">Envoyer un message WhatsApp</span>
        </button>
        
        <!-- Bouton Téléphone -->
        <button class="help-button phone" id="phoneBtn">
            <i class="fas fa-phone"></i>
            <span class="tooltip">Appeler notre équipe</span>
        </button>
    </div>

    <script>
        // Fonctionnalité WhatsApp
        document.getElementById('whatsappBtn').addEventListener('click', function() {
            // Numéro de téléphone (format international sans espaces)
            const phoneNumber = '237677114758';
            
            // Message prédéfini (encodé pour URL)
            const defaultMessage = encodeURIComponent(
                "Bonjour BRIDG'IN SOLUTIONS,\n\nJe vous contacte via votre site web. Pouvez-vous m'aider ?"
            );
            
            // Ouvrir WhatsApp
            window.open(`https://wa.me/${phoneNumber}?text=${defaultMessage}`, '_blank');
            
            // Analytics (optionnel)
            console.log('WhatsApp button clicked');
        });

        // Fonctionnalité Appel téléphonique
        document.getElementById('phoneBtn').addEventListener('click', function() {
            // Numéro de téléphone (format international cliquable)
            const phoneNumber = '+237677114758';
            
            // Confirmation avant d'appeler (sur desktop)
            if (window.innerWidth > 768) {
                const shouldCall = confirm(`Voulez-vous appeler le ${phoneNumber} ?`);
                if (shouldCall) {
                    window.location.href = `tel:${phoneNumber}`;
                }
            } else {
                // Sur mobile, appel direct
                window.location.href = `tel:${phoneNumber}`;
            }
            
            // Analytics (optionnel)
            console.log('Phone button clicked');
        });

        // Effet de vibration au clic
        const buttons = document.querySelectorAll('.help-button');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 200);
            });
        });
    </script>

    <script>
        // Animation au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.help-button');
            
            buttons.forEach((button, index) => {
                // Délai d'animation différent pour chaque bouton
                setTimeout(() => {
                    button.style.opacity = '1';
                }, index * 200);
            });
        });

        // Désactiver l'animation pulse après le premier hover
        const whatsappBtn = document.querySelector('.whatsapp');
        whatsappBtn.addEventListener('mouseenter', function() {
            this.classList.remove('pulse');
        });
        </script>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('menu');

        mobileMenuBtn.addEventListener('click', () => {
            menu.classList.toggle('active');
            mobileMenuBtn.innerHTML = menu.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });

        // Scroll Animation
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.service-card, .testimonial-slider');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if (elementPosition < screenPosition) {
                    element.classList.add('animate');
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
    <script>
const slider = document.querySelector('.testimonial-slider');
const prevBtn = document.getElementById('testimonial-prev');
const nextBtn = document.getElementById('testimonial-next');

nextBtn.addEventListener('click', () => {
    slider.scrollBy({ left: 350, behavior: 'smooth' });
});

prevBtn.addEventListener('click', () => {
    slider.scrollBy({ left: -350, behavior: 'smooth' });
});
    // Carousel pour les témoignages horizontaux
    let currentTestimonial = 0;
    const testimonials = document.querySelectorAll('.testimonial-item');
    const testimonialCount = testimonials.length;

    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextTestimonial() {
        currentTestimonial = (currentTestimonial + 1) % testimonialCount;
        showTestimonial(currentTestimonial);
    }

    // Pour mobile, on affiche un seul témoignage à la fois
    if (window.innerWidth <= 768) {
        showTestimonial(currentTestimonial);
        setInterval(nextTestimonial, 5000);
    }

    // Animation des cartes de formation
    const trainingCards = document.querySelectorAll('.training-card');
    
    trainingCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.querySelector('.training-actions').style.opacity = '1';
        });
        
        card.addEventListener('mouseleave', () => {
            card.querySelector('.training-actions').style.opacity = '0';
        });
    });
</script>
</body>
</html>