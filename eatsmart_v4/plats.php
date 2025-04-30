<?php
    ob_start(); // Démarrer la capture du contenu

    // Initialisation de la requête cURL pour récupérer les données de l'API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/projet-restaurant/eatsmart_v4/api/index.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Vérification si la récupération des données a échoué
    if ($response === false) {
        die("Erreur lors de la récupération de l'API");
    }

    // Décodage de la réponse JSON
    $reponse = json_decode($response, true);

    // Vérification si la réponse est valide
    if (!is_array($reponse)) {
        die("Erreur : Réponse invalide de l'API.");
    }

    // Définition des dimensions des images
    $width = isset($_POST['width']) ? (int)$_POST['width'] : 400;
    $height = isset($_POST['height']) ? (int)$_POST['height'] : 300;


    // Affiche le plat sélectionner
    // Récupérer l'ID du plat depuis l'URL
    $id_article = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Vérification et affichage du plat correspondant
    foreach ($reponse as $element) {
        if (isset($element['num_article']) && $element['num_article'] == $id_article) {
            echo "<ul>";
            echo "<h2>Nom : " . htmlspecialchars($element['nom_article']) . "</h2>";
            
            // Affichage de l'image
            echo "<img src='" . htmlspecialchars($element['chemin_img']) . "' width='$width' height='$height'>";

            // Afficher la description si elle existe
            if (!empty($element['description'])) {
                echo "<li>Description : " . nl2br(htmlspecialchars($element['description'])) . "</li>";
            }

            // Affichage du prix
            echo "<li>Prix : " . htmlspecialchars($element['prix']) . " €</li>";
            echo "</ul>";
            break; // Arrête la boucle une fois le plat trouvé
        }
    }

    
    // Récupérer le nom du plat depuis l'URL
    $nom_article = isset($_GET['nom']) ? $_GET['nom'] : '';

    // Vérification et affichage du plat correspondant
    foreach ($reponse as $element) {
        if (isset($element['nom_article']) && $element['nom_article'] == $nom_article) {
            echo "<ul>";
            echo "<h2>Nom : " . htmlspecialchars($element['nom_article']) . "</h2>";

            // Affichage de l'image
            echo "<img src='" . htmlspecialchars($element['chemin_img']) . "' width='$width' height='$height'>";

            // Afficher la description si elle existe
            if (!empty($element['description'])) {
                echo "<li>Description : " . nl2br(htmlspecialchars($element['description'])) . "</li>";
            }

            // Affichage du prix
            echo "<li>Prix : " . htmlspecialchars($element['prix']) . " €</li>";
            echo "</ul>";
            break; // Arrête la boucle une fois le plat trouvé
        }
    }
    $content = ob_get_clean(); // Récupérer le contenu et arrêter la capture
    
    include 'css/base.blade.php'; // Inclure le template base   
?>