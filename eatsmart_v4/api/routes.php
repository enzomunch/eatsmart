<?php
require_once "../config/database.php";
require_once "../controllers/ArticleController.php";

// Détection de la méthode HTTP et appel du bon contrôleur
$requestMethod = $_SERVER["REQUEST_METHOD"];

switch ($requestMethod) {
    case "GET":
        getArticles();
        break;

    case "POST":
        createArticle();
        break;

    case "PUT":
        updateArticle();
        break;

    case "DELETE":
        deleteArticle();
        break;
}
?>