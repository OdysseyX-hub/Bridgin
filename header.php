<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRIDG'IN SOLUTIONS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                            <li><a href="#">Etudes de cas</a></li>
                            <li><a href="#">Indicateurs</a></li>
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
                            <li><a href="#">Tendances métiers</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#">Contact <i class="fas fa-chevron-down"></i></a>
                        <ul class="simple-submenu">
                            <li><a href="#">Formulaire intelligent</a></li>
                            <li><a href="#">Chatbot</a></li>
                            <li><a href="#">Prises de rendez-vous</a></li>
                        </ul>
                    </li>
                    
                    <!-- Menu Compte - Version améliorée -->
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
                </ul>
                
                <div class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

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
    </script>
</body>
</html>