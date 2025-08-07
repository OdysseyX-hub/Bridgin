<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRIDG'IN SOLUTIONS - Catalogue de formations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Acceuil.css">
    <style>
        /* Styles spécifiques à la page catalogue */
        .catalogue-header {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
            padding: 120px 0 60px;
            text-align: center;
            margin-bottom: 60px;
        }
        
        .catalogue-header h1 {
            font-size: 42px;
            margin-bottom: 20px;
        }
        
        .catalogue-header p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .download-all {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background-color: #2ecc71;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            margin-bottom: 30px;
        }
        
        .download-all:hover {
            background-color: #27ae60;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(46, 204, 113, 0.3);
        }
        
        .catalogue-filters {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .filter-group {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .filter-group label {
            font-weight: 500;
        }
        
        .filter-group select, 
        .filter-group input {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            min-width: 200px;
        }
        
        .search-input {
            position: relative;
            flex: 1;
            max-width: 400px;
        }
        
        .search-input input {
            width: 100%;
            padding-left: 40px;
        }
        
        .search-input i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #7f8c8d;
        }
        
        .catalogue-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .formation-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
        }
        
        .formation-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .formation-image {
            height: 180px;
            background: #ecf0f1;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3498db;
            font-size: 50px;
            position: relative;
        }
        
        .formation-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #e74c3c;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .formation-content {
            padding: 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .formation-content h3 {
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        .formation-category {
            display: inline-block;
            background: rgba(52, 152, 219, 0.1);
            color: #3498db;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 15px;
        }
        
        .formation-description {
            color: #7f8c8d;
            margin-bottom: 20px;
            flex: 1;
        }
        
        .formation-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        
        .formation-duration, 
        .formation-price {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .formation-price {
            color: #2ecc71;
            font-weight: 600;
        }
        
        .formation-actions {
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }
        
        .details-btn, 
        .download-btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            text-align: center;
            flex: 1;
        }
        
        .details-btn {
            border: 1px solid #3498db;
            color: #3498db;
        }
        
        .details-btn:hover {
            background: #3498db;
            color: white;
        }
        
        .download-btn {
            background: #2c3e50;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .download-btn:hover {
            background: #34495e;
        }
        
        .no-results {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 0;
            color: #7f8c8d;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 60px;
        }
        
        .pagination a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            color: #2c3e50;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            border: 1px solid #ddd;
        }
        
        .pagination a.active,
        .pagination a:hover {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }
        
        @media (max-width: 768px) {
            .catalogue-header {
                padding: 100px 0 40px;
            }
            
            .catalogue-header h1 {
                font-size: 32px;
            }
            
            .catalogue-filters {
                flex-direction: column;
                align-items: stretch;
            }
            
            .filter-group {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .search-input {
                max-width: 100%;
            }
            
            .catalogue-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
   <?php
   include 'header.php';
   ?>
  

    <!-- Catalogue Header -->
    <section class="catalogue-header">
        <div class="container">
            <h1>Notre catalogue de formations</h1>
            <p>Découvrez l'ensemble de nos formations professionnelles certifiantes, conçues pour répondre aux besoins des entreprises et des particuliers exigeants.</p>
            <a href="catalogue-bridgin-2025.pdf" class="download-all" download>
                <i class="fas fa-download"></i> Télécharger le catalogue complet (PDF)
            </a>
        </div>
    </section>

    <!-- Catalogue Content -->
    <div class="container">
        <!-- Filtres de recherche -->
        <div class="catalogue-filters">
            <div class="filter-group">
                <label for="category">Filtrer par :</label>
                <select id="category">
                    <option value="">Toutes les catégories</option>
                    <option value="management">Management</option>
                    <option value="rh">Ressources Humaines</option>
                    <option value="finance">Finance</option>
                    <option value="digital">Transformation digitale</option>
                    <option value="commerce">Commerce & Vente</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label for="format">Format :</label>
                <select id="format">
                    <option value="">Tous les formats</option>
                    <option value="presentiel">Présentiel</option>
                    <option value="online">En ligne</option>
                    <option value="hybride">Hybride</option>
                </select>
            </div>
            
            <div class="search-input">
                <i class="fas fa-search"></i>
                <input type="text" id="search" placeholder="Rechercher une formation...">
            </div>
        </div>
        
        <!-- Grille des formations -->
        <div class="catalogue-grid" id="formations-grid">
            <!-- Formation 1 -->
            <div class="formation-card">
                <div class="formation-image">
                    <i class="fas fa-chart-line"></i>
                    <div class="formation-badge">Nouveau</div>
                </div>
                <div class="formation-content">
                    <h3>Leadership avancé</h3>
                    <span class="formation-category">Management</span>
                    <p class="formation-description">Acquérez les compétences pour diriger des équipes performantes dans un environnement complexe et en constante évolution.</p>
                    <div class="formation-meta">
                        <span class="formation-duration"><i class="far fa-clock"></i> 24h</span>
                        <span class="formation-price"><i class="fas fa-franc-sign"></i> 200 000 FCFA</span>
                    </div>
                    <div class="formation-actions">
                        <a href="#" class="details-btn">Détails</a>
                        <a href="fiche-leadership.pdf" class="download-btn" download>
                            <i class="fas fa-download"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Formation 2 -->
            <div class="formation-card">
                <div class="formation-image">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="formation-content">
                    <h3>Gestion des talents 2.0</h3>
                    <span class="formation-category">Ressources Humaines</span>
                    <p class="formation-description">Maîtrisez les nouvelles méthodes de gestion des talents et de développement des compétences en entreprise.</p>
                    <div class="formation-meta">
                        <span class="formation-duration"><i class="far fa-clock"></i> 18h</span>
                        <span class="formation-price"><i class="fas fa-franc-sign"></i> 180 000 FCFA</span>
                    </div>
                    <div class="formation-actions">
                        <a href="#" class="details-btn">Détails</a>
                        <a href="fiche-gestion-talents.pdf" class="download-btn" download>
                            <i class="fas fa-download"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Formation 3 -->
            <div class="formation-card">
                <div class="formation-image">
                    <i class="fas fa-project-diagram"></i>
                    <div class="formation-badge">Populaire</div>
                </div>
                <div class="formation-content">
                    <h3>Gestion de projet agile</h3>
                    <span class="formation-category">Management</span>
                    <p class="formation-description">Apprenez à manager vos projets avec les méthodologies agiles (Scrum, Kanban) pour plus d'efficacité.</p>
                    <div class="formation-meta">
                        <span class="formation-duration"><i class="far fa-clock"></i> 30h</span>
                        <span class="formation-price"><i class="fas fa-franc-sign"></i> 250 000 FCFA</span>
                    </div>
                    <div class="formation-actions">
                        <a href="#" class="details-btn">Détails</a>
                        <a href="fiche-gestion-projet.pdf" class="download-btn" download>
                            <i class="fas fa-download"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Formation 4 -->
            <div class="formation-card">
                <div class="formation-image">
                    <i class="fas fa-digital-tachograph"></i>
                </div>
                <div class="formation-content">
                    <h3>Transformation digitale</h3>
                    <span class="formation-category">Digital</span>
                    <p class="formation-description">Comprenez les enjeux du digital et pilotez la transformation digitale de votre organisation.</p>
                    <div class="formation-meta">
                        <span class="formation-duration"><i class="far fa-clock"></i> 20h</span>
                        <span class="formation-price"><i class="fas fa-franc-sign"></i> 220 000 FCFA</span>
                    </div>
                    <div class="formation-actions">
                        <a href="#" class="details-btn">Détails</a>
                        <a href="fiche-transformation-digitale.pdf" class="download-btn" download>
                            <i class="fas fa-download"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Formation 5 -->
            <div class="formation-card">
                <div class="formation-image">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="formation-content">
                    <h3>Négociation commerciale</h3>
                    <span class="formation-category">Commerce & Vente</span>
                    <p class="formation-description">Développez vos techniques de négociation pour conclure des deals gagnant-gagnant avec vos clients.</p>
                    <div class="formation-meta">
                        <span class="formation-duration"><i class="far fa-clock"></i> 16h</span>
                        <span class="formation-price"><i class="fas fa-franc-sign"></i> 150 000 FCFA</span>
                    </div>
                    <div class="formation-actions">
                        <a href="#" class="details-btn">Détails</a>
                        <a href="fiche-negociation.pdf" class="download-btn" download>
                            <i class="fas fa-download"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Formation 6 -->
            <div class="formation-card">
                <div class="formation-image">
                    <i class="fas fa-chart-pie"></i>
                    <div class="formation-badge">Certifiante</div>
                </div>
                <div class="formation-content">
                    <h3>Analyse financière</h3>
                    <span class="formation-category">Finance</span>
                    <p class="formation-description">Maîtrisez les outils d'analyse financière pour prendre des décisions stratégiques éclairées.</p>
                    <div class="formation-meta">
                        <span class="formation-duration"><i class="far fa-clock"></i> 28h</span>
                        <span class="formation-price"><i class="fas fa-franc-sign"></i> 280 000 FCFA</span>
                    </div>
                    <div class="formation-actions">
                        <a href="#" class="details-btn">Détails</a>
                        <a href="fiche-analyse-financiere.pdf" class="download-btn" download>
                            <i class="fas fa-download"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="pagination">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </div>
    </div>

    <!-- Footer (identique aux autres pages) -->
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

    <!-- Help Bar (identique aux autres pages) -->
    <div class="help-bar">
        <button class="help-button whatsapp" id="whatsappBtn">
            <i class="fab fa-whatsapp"></i>
            <span class="tooltip">Envoyer un message WhatsApp</span>
        </button>
        <button class="help-button phone" id="phoneBtn">
            <i class="fas fa-phone"></i>
            <span class="tooltip">Appeler notre équipe</span>
        </button>
    </div>

    <script>
        // Script pour la recherche et filtrage (exemple basique)
        document.getElementById('search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const formationCards = document.querySelectorAll('.formation-card');
            
            formationCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const description = card.querySelector('.formation-description').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
        
        // Script pour le filtre par catégorie
        document.getElementById('category').addEventListener('change', function() {
            const selectedCategory = this.value;
            const formationCards = document.querySelectorAll('.formation-card');
            
            if (!selectedCategory) {
                formationCards.forEach(card => card.style.display = 'flex');
                return;
            }
            
            formationCards.forEach(card => {
                const category = card.querySelector('.formation-category').textContent.toLowerCase();
                
                if (category.includes(selectedCategory)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
        
        // Script pour le filtre par format (exemple)
        document.getElementById('format').addEventListener('change', function() {
            // Implémentation similaire au filtre par catégorie
            // Dans une vraie application, vous auriez besoin d'avoir cette information dans chaque carte
        });
        
        // Scripts existants pour le menu mobile et autres fonctionnalités
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            menu.classList.toggle('active');
            mobileMenuBtn.innerHTML = menu.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });
        
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });
        
        // Script WhatsApp
        document.getElementById('whatsappBtn').addEventListener('click', function() {
            const phoneNumber = '237677114758';
            const defaultMessage = encodeURIComponent(
                "Bonjour BRIDG'IN SOLUTIONS,\n\nJe vous contacte via votre site web à propos de vos formations. Pouvez-vous m'aider ?"
            );
            window.open(`https://wa.me/${phoneNumber}?text=${defaultMessage}`, '_blank');
        });
        
        // Script Appel téléphonique
        document.getElementById('phoneBtn').addEventListener('click', function() {
            const phoneNumber = '+237677114758';
            if (window.innerWidth > 768) {
                const shouldCall = confirm(`Voulez-vous appeler le ${phoneNumber} ?`);
                if (shouldCall) {
                    window.location.href = `tel:${phoneNumber}`;
                }
            } else {
                window.location.href = `tel:${phoneNumber}`;
            }
        });
    </script>
</body>
</html>