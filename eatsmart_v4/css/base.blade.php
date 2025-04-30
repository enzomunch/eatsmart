<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Ajout du framework CSS Bootstrap pour styliser facilement le site -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Définition du titre de la page -->
    <title>Restaurants AlsaComo</title>

    <!-- Défintion du style -->
    <style>
        html, body {
            height: 100%;
        }
    
        body {
            display: flex;
            flex-direction: column;
        }
    
        .content {
            flex: 1;
        }

        footer .col-md-4 p {
            margin-bottom: 5px;
        }

    </style> 
</head>

<body>
    <!-- Barre de navigation avec Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container-fluid">

            <!-- Nom du restaurant -->
            <span style="font-weight: bold; font-size: large; color:rgb(217, 58, 95);">AlsaComo</span>

            <!-- Bouton pour le menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu de navigation  -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/projet-restaurant/eatsmart_v4/menu.php" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="/projet-restaurant/eatsmart_v4/contact.php" class="nav-link">Contact</a>
                    </li>
                    </li>
                </ul>
            </div>
            
        </div>
    </nav>

    <!-- Emplacement pour insérer le contenu spécifique à chaque page -->
    <div class="content" style="background-color: #f1f3f6; margin-bottom: 0; padding-bottom: 0;">
        <?php echo isset($content) ? $content : ''; ?> 
    </div>

    <!-- Trait de séparation -->
    <hr style="border: 1px solid #a5a5a5; margin: 0;">

    <!-- Pied de page -->
    <footer class="text-center text-lg-start mt-0 py-3 shadow-sm bg-white" style="width: 100%; margin: 0 auto;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-4 mb-2 mt-2">
                    <h5>Restaurants AlsaComo</h5>
                    <p>13005, Marseille, France</p>
                    <p>Tél : <a href="tel:+33123456789">+33 1 23 45 67 89</a></p>
                    <p>Email : <a href="mailto:contact@alsacomo.com">contact@alsacomo.com</a></p>
                </div>
                <div class="col-md-4 mb-2 mt-2">
                    <h5>Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Mentions légales</a></li>
                    </ul>
                </div>
            </div>
            <hr style="border: 1px solid #ddd; margin: 3px 0;">
            <p class="mb-0 text-center" style="font-size: 0.9rem;">
                &copy; 2025 Restaurants AlsaComo - Tous droits réservés.
            </p>
        </div>
    </footer>

    <!-- Ajout de Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
