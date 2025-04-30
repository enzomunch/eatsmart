<!DOCTYPE html>
<html>
    <head>
        <?php require_once(__DIR__ . '/header.php'); ?>
        <title> Restaurants AlsaComo </title>
    </head> 

    <body>
        <?php
            $user = "root";
            $password = "";
            $databaseName = "gestion_restaurant";
        
            try{
                $connexion = new PDO('mysql:host=localhost;dbname=' . $databaseName, $user, $password);
            }catch(Exception $e){
                echo "CONNEXION ECHOUE" . $e->getMessage();
            }

        ?>

        <!-- PLATS COMORIEN -->
        <h1> Plats comorien </h1>
        <h2> Plats </h2>
        <?php

            $sql = "SELECT * FROM article WHERE num_cat = 1";
            $req = $connexion->query($sql);
            $width = isset($_POST ['width']) ? (int)$_POST['width'] : 400;
            $height1 = isset($_POST ['height']) ? (int)$_POST['height'] : 400;
            $height2 = isset($_POST ['height']) ? (int)$_POST['height'] : 300;

            if ($req->rowCount() > 0) {
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    echo "<ul>";
                    echo "<h2> Nom : " . htmlspecialchars($row['nom_article']) . "</h2>";
                    echo "<img src =" . htmlspecialchars($row['chemin_img']) .  " ' width='$width' height='$height2'' >";
                    echo nl2br("<li> Description : " . htmlspecialchars($row['description']) . "</li>");
                    echo "<li> Prix : " . htmlspecialchars($row['prix']) . " € </li>";
                    echo "</ul>";
                }
                echo "<br>";
            } else {
                echo "Aucun enregistrement trouvé.";
            }
        ?>

        <!-- DESSERTS COMORIEN -->
        <h2> Desserts/Pâtisseries </h2>
        <?php

            $sql = "SELECT * FROM article WHERE num_cat = 2";
            $req = $connexion->query($sql);
            $width = isset($_POST ['width']) ? (int)$_POST['width'] : 400;
            $height1 = isset($_POST ['height']) ? (int)$_POST['height'] : 400;
            $height2 = isset($_POST ['height']) ? (int)$_POST['height'] : 300;

            if ($req->rowCount() > 0) {
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    echo "<ul>";
                    echo "<h2> Nom : " . htmlspecialchars($row['nom_article']) . "</h2>";
                    echo "<img src =" . htmlspecialchars($row['chemin_img']) .  " ' width='$width' height='$height2'' >";
                    echo "<li> Description : " . htmlspecialchars($row['description']) . "</li>";
                    echo "<li> Prix : " . htmlspecialchars($row['prix']) . " € </li>";
                    echo "</ul>";
                }
                echo "<br>";
            } else {
                echo "Aucun enregistrement trouvé.";
            }
        ?>

        <!-- AUTRES COMORIEN -->
        <h2> Autres </h2>
        <?php

            $sql = "SELECT * FROM article WHERE num_cat = 3";
            $req = $connexion->query($sql);
            $width = isset($_POST ['width']) ? (int)$_POST['width'] : 400;
            $height1 = isset($_POST ['height']) ? (int)$_POST['height'] : 400;
            $height2 = isset($_POST ['height']) ? (int)$_POST['height'] : 300;

            if ($req->rowCount() > 0) {
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    echo "<ul>";
                    echo "<h2> Nom : " . htmlspecialchars($row['nom_article']) . "</h2>";
                    echo "<img src =" . htmlspecialchars($row['chemin_img']) .  " ' width='$width' height='$height2'' >";
                    echo "<li> Description : " . htmlspecialchars($row['description']) . "</li>";
                    echo "<li> Prix : " . htmlspecialchars($row['prix']) . " € </li>";
                    echo "</ul>";
                }
                echo "<br>";
            } else {
                echo "Aucun enregistrement trouvé.";
            }
        ?>


        <!-- PLATS ALSACIEN -->
        <h1> Plats alsacien </h1>
        <h2> Plat </h2>
        <?php

            $sql = "SELECT * FROM article WHERE num_cat = 4";
            $req = $connexion->query($sql);
            $width = isset($_POST ['width']) ? (int)$_POST['width'] : 400;
            $height1 = isset($_POST ['height']) ? (int)$_POST['height'] : 400;
            $height2 = isset($_POST ['height']) ? (int)$_POST['height'] : 300;

            if ($req->rowCount() > 0) {
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    echo "<ul>";
                    echo "<h2> Nom : " . htmlspecialchars($row['nom_article']) . "</h2>";
                    echo "<img src =" . htmlspecialchars($row['chemin_img']) .  " ' width='$width' height='$height2'' >";
                    echo "<li> Description : " . htmlspecialchars($row['description']) . "</li>";
                    echo "<li> Prix : " . htmlspecialchars($row['prix']) . " € </li>";
                    echo "</ul>";
                }
                echo "<br>";
            } else {
                echo "Aucun enregistrement trouvé.";
            }
        ?>

        <!-- DESSERTS ALSACIEN -->
        <h2> Desserts/Pâtisseries </h2>
        <?php

            $sql = "SELECT * FROM article WHERE num_cat = 5";
            $req = $connexion->query($sql);
            $width = isset($_POST ['width']) ? (int)$_POST['width'] : 400;
            $height1 = isset($_POST ['height']) ? (int)$_POST['height'] : 400;
            $height2 = isset($_POST ['height']) ? (int)$_POST['height'] : 300;

            if ($req->rowCount() > 0) {
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    echo "<ul>";
                    echo "<h2> Nom : " . htmlspecialchars($row['nom_article']) . "</h2>";
                    echo "<img src =" . htmlspecialchars($row['chemin_img']) .  " ' width='$width' height='$height1'' >";
                    echo "<li> Description : " . htmlspecialchars($row['description']) . "</li>";
                    echo "<li> Prix : " . htmlspecialchars($row['prix']) . " € </li>";
                    echo "</ul>";
                }
                echo "<br>";
            } else {
                echo "Aucun enregistrement trouvé.";
            }
        ?>

        <!-- BOISSON -->
        <h2> Boisson </h2>
        <?php

            $sql = "SELECT * FROM article WHERE num_cat = 7";
            $req = $connexion->query($sql);
            $width = isset($_POST ['width']) ? (int)$_POST['width'] : 400;
            $height1 = isset($_POST ['height']) ? (int)$_POST['height'] : 400;
            $height2 = isset($_POST ['height']) ? (int)$_POST['height'] : 300;

            if ($req->rowCount() > 0) {
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    echo "<ul>";
                    echo "<h2> Nom : " . htmlspecialchars($row['nom_article']) . "</h2>";
                    echo "<img src =" . htmlspecialchars($row['chemin_img']) .  " ' width='$width' height='$height1'' >";
                    echo "<li> Prix : " . htmlspecialchars($row['prix']) . " € </li>";
                    echo "</ul>";
                }
                echo "<br>";
            } else {
                echo "Aucun enregistrement trouvé.";
            }
        ?>
        
    </body>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</html>