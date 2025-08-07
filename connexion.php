<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRIDG'IN SOLUTIONS - Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="connexion.css">
   
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <div class="login-header-content">
                <h1>Connexion à votre espace</h1>
                <p>Accédez à vos formations et ressources personnelles</p>
            </div>
        </div>
        
        <div class="login-body">
            <form id="loginForm">
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" id="email" class="form-control" placeholder="votre@email.com" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" id="password" class="form-control" placeholder="••••••••" required>
                </div>
                
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Se souvenir de moi</label>
                </div>
                
                <button type="submit" class="login-btn" onclick="window.location.href='client.php'">
                    <i class="fas fa-sign-in-alt"></i> Se connecter
                </button>
                
                <div class="divider">ou</div>
                
                <div class="social-login">
                    <a href="#" class="social-btn google" title="Se connecter avec Google">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-btn linkedin" title="Se connecter avec LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-btn facebook" title="Se connecter avec Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </form>
            
            <div class="login-footer">
                <a href="#">Mot de passe oublié ?</a> • 
                <a href="inscription.php">Créer un compte</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Récupération des valeurs du formulaire
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const rememberMe = document.getElementById('remember').checked;
            
            // Simulation de connexion (à remplacer par une vraie requête AJAX)
            console.log('Tentative de connexion avec :', { email, password, rememberMe });
            
            // Si "Se souvenir de moi" est coché, stocker les infos dans localStorage
            if (rememberMe) {
                localStorage.setItem('bridgin_remember_email', email);
                // Note: Ne stockez jamais le mot de passe en clair dans le localStorage
            } else {
                localStorage.removeItem('bridgin_remember_email');
            }
            
            // Redirection après connexion (simulée)
            setTimeout(() => {
                alert('Connexion réussie ! Redirection...');
                // window.location.href = 'tableau-de-bord.html';
            }, 1000);
        });
        
        // Si l'email est enregistré, le pré-remplir
        window.addEventListener('DOMContentLoaded', () => {
            const savedEmail = localStorage.getItem('bridgin_remember_email');
            if (savedEmail) {
                document.getElementById('email').value = savedEmail;
                document.getElementById('remember').checked = true;
            }
        });
    </script>
</body>
</html>