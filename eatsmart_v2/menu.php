<!DOCTYPE html>
<html>
    <head>
        <?php require_once(__DIR__ . '/header.php'); ?>
        <title> Restaurants AlsaComo </title>
    </head>

    <?php include('variables.php') ?>

    <body>
        <!-- PLATS COMORIEN -->
        <h1> Plats comorien </h1>
        <h2> Plats </h2>       
        <ul>
            <h2> Nom: <?php echo $plat_pilao["plat_pilao"]?> </h2>
            <img src = <?php echo $plat_pilao["image_pilao"]?> width="400" height="400">
            <li> Description : <?php echo $plat_pilao["desc_pilao"]?></li>
            <li> Prix : <?php echo $plat_pilao["prix_pilao"]?> </li>
        </ul>

        <!-- DESSERTS COMORIEN -->
        <h2> Desserts/Pâtisseries </h2>
        <ul>
            <h2> Nom: <?php echo $dessert_donace["dessert_donace"]?> </h2>
            <img src = <?php echo $dessert_donace["image_donace"]?> width="400" height="300">
            <li> Description : <?php echo $dessert_donace["desc_donace"]?></li>
            <li> Prix : <?php echo $dessert_donace["prix_donace"]?> </li>
        </ul>

        <!-- AUTRES COMORIEN -->
        <h2> Autres </h2>
        <ul>
            <h2> Nom: <?php echo $autres_samboussa["autres_samboussa"]?> </h2>
            <img src = <?php echo $autres_samboussa["image_samboussa"]?> width="400" height="300">
            <li> Description : <?php echo $autres_samboussa["desc_samboussa"]?></li>
            <li> Prix : <?php echo $autres_samboussa["prix_samboussa"]?> </li>
        </ul>

        <br>

        <!-- PLATS ALSACIEN -->
        <h1> Plats alsacien </h1>
        <h2> Plat </h2>
        <ul>
            <h2> Nom: <?php echo $plat_flammekueche["plat_flammekueche"]?> </h2>
            <img src = <?php echo $plat_flammekueche["image_flammekueche"]?> width="400" height="300">
            <li> Description : <?php echo $plat_flammekueche["desc_flammekueche"]?></li>
            <li> Prix : <?php echo $plat_flammekueche["prix_flammekueche"]?> </li>
        </ul>

        <!-- DESSERTS ALSACIEN -->
        <h2> Desserts/Pâtisseries </h2>
        <ul>
            <h2> Nom: <?php echo $dessert_manele["dessert_manele"]?> </h2>
            <img src = <?php echo $dessert_manele["image_manele"]?> width="400" height="400">
            <li> Description : <?php echo $dessert_manele["desc_manele"]?></li>
            <li> Prix : <?php echo $dessert_manele["prix_manele"]?> </li>
        </ul>

        <ul>
            <h2> Nom: <?php echo $dessert_bretzel["dessert_bretzel"]?> </h2>
            <img src = <?php echo $dessert_bretzel["image_bretzel"]?> width="400" height="300">
            <li> Description : <?php echo $dessert_bretzel["desc_bretzel"]?></li>
            <li> Prix : <?php echo $dessert_bretzel["prix_bretzel"]?> </li>
        </ul>

        
    </body>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</html>