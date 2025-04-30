<?php
require_once "../config/database.php";

// GET POUR RECUPERER L'ARTICLE
function getArticles() {
    global $pdo;

    // Vérifie si un numéro d'article est passé en paramètre
    if (isset($_GET["num_article"]) || isset($_GET["nom_article"])) {
        $num_article = isset($_GET["num_article"]) ? (int) $_GET["num_article"] : null;
        $nom_article = isset($_GET["nom_article"]) ? $_GET["nom_article"] : null;
        $articles = $pdo->query("SELECT * FROM articles")->fetchAll(PDO::FETCH_ASSOC);       
        foreach ($articles as $article) {
            if (($article['num_article'] === $num_article) || ($article['nom_article'] === $nom_article)) {
                echo json_encode($article);
                exit;
            }
        }
        echo json_encode(["message" => "Article non trouvé"]);
    } else {
        // Récupère tous les articles
        $articles = $pdo->query("SELECT * FROM articles")->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($articles);
    }
}


// POST POUR AJOUTER UN ARTICLE
function createArticle() {
    global $pdo;
    $input = json_decode(file_get_contents("php://input"), true);

    if (!isset($input["nom_article"]) || !isset($input["prix"]) || !isset($input["description"]) || !isset($input["chemin_img"]) || !isset($input["num_cat"])) {
        http_response_code(400);
        echo json_encode(["error" => "Données incomplètes"]);
        return;
    }
    // Requête
    $stmt = $pdo->prepare("INSERT INTO articles (nom_article, prix, description, chemin_img, num_cat) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$input["nom_article"], $input["prix"], $input["description"], $input["chemin_img"], $input["num_cat"]]);
    // MESSAGE
    echo json_encode(["message" => "Article ajouté"]);
}


// PUT POUR METTRE A JOUR UN ARTICLE
function updateArticle() {
    global $pdo;
    $input = json_decode(file_get_contents("php://input"), true);

    if (!isset($input["num_article"]) || !isset($input["nom_article"]) || !isset($input["prix"]) || !isset($input["description"]) || !isset($input["chemin_img"]) || !isset($input["num_cat"])) {
        http_response_code(400);
        echo json_encode(["error" => "Données incomplètes"]);
        return;
    }
    // Requête
    $stmt = $pdo->prepare("UPDATE articles SET nom_article = ?, prix = ?, description = ?, chemin_img = ?, num_cat = ? WHERE num_article = ?");
    $stmt->execute([$input["nom"], $input["prix"], $input["id"]]);
    // MESSAGE
    echo json_encode(["message" => "Article mis à jour"]);
}


// DELETE POUR SUPPRIMER UN ARTICLE
function deleteArticle() {
    global $pdo;
    $input = json_decode(file_get_contents("php://input"), true);

    if (!isset($input["num_article"])) {
        http_response_code(400);
        echo json_encode(["error" => "Numéro de l'article manquant"]);
        return;
    }
    // Requête
    $stmt = $pdo->prepare("DELETE FROM articles WHERE num_article = ?");
    $stmt->execute([$input["num_article"]]);
    // MESSAGE
    echo json_encode(["message" => "Article supprimé"]);
}
?>