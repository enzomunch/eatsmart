<?php
    ob_start(); // Démarrer la capture du contenu

    // Récupération des données de l'API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/projet-restaurant/eatsmart_v4/api/index.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        die("Erreur lors de la récupération de l'API");
    }

    $reponse = json_decode($response, true);
    if (!is_array($reponse)) {
        die("Erreur : Réponse invalide de l'API.");
    }

    // Catégories des plats
    $categories = [
        1 => "Plats comorien",
        2 => "Desserts/Pâtisseries",
        3 => "Autres",
        4 => "Plats alsacien",
        5 => "Desserts/Pâtisseries",
        7 => "Boisson"
    ];

    $width = 400;
    $height = 300;

    // Affichage des plats sous forme de cartes Bootstrap
    foreach ($categories as $num_cat => $titre) {
        echo "<h2>$titre</h2>";
        echo '<div class="row mt-3">'; // Démarrer une ligne pour les cartes
        foreach ($reponse as $element) {
            if (isset($element['num_cat']) && $element['num_cat'] == $num_cat) {
                echo '<div class="col-12 col-md-6 col-xl-3 mb-4">'; // Colonne pour chaque carte
                echo '<div class="card" style="width: 22rem;">'; // Carte

                // Image du plat
                echo "<img src='" . htmlspecialchars($element['chemin_img']) . "' class='card-img-top' alt='Image de " . htmlspecialchars($element['nom_article']) . "' width='$width' height='$height'>";

                // Corps de la carte
                echo '<div class="card-body">';
                echo "<h5 class='card-title'>" . htmlspecialchars($element['nom_article']) . "</h5>";

                // Prix du plat
                echo "<p class='card-text'>Prix : " . htmlspecialchars($element['prix']) . " €</p>";

                // Lien vers la page du plat
                echo "<a href='plats.php?id=" . htmlspecialchars($element['num_article']) . "' class='btn btn-primary'>Voir plus</a>";

                echo '</div>'; // Fermeture de la card-body
                echo '</div>'; // Fermeture de la carte
                echo '</div>'; // Fermeture de la colonne
            }
        }
        echo '</div>'; // Fermeture de la ligne
    }
    $content = ob_get_clean(); // Récupérer le contenu et arrêter la capture

    include 'css/base.blade.php'; // Inclure le template base
?>
