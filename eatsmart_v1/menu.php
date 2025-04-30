<!DOCTYPE html>
<html>
    <?php
    $plat_comorien=[
        "plat_C1"=>"Pilao au poulet",
        "image_plat_C1" => "https://img.cuisineaz.com/660x660/2021/07/05/i179558-23-pilao.jpeg",
        "prix_plat_C1" =>"10€",
        "desc_plat_C1"=>"- Riz basmati
                - Poulet
                - Oignons
                - Tomates
                - Ail, gingembre
                - Épices : cardamome, cannelle, cumin, curcuma, clous de girofle
                - Huile ou beurre
                - Bouillon de poulet
                - Sel et poivre"
    ];
    $dessert_comorien=[
        "dessert_C1"=>"Donace (beignets sucrés et frits)",
        "image_dessert_C1"=>"https://i.ytimg.com/vi/FY5puQbJWe0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBd-cmV4Ic3cNnrYTRa6aZTFauWPQ",
        "prix_dessert_C1"=>"1.00€ (unité)",
        "desc_dessert_C1"=>"Farine, Sucre, Levure, Œufs, Lait"
    ];
    $autres_comorien=[
        "autres_C1"=>"Samboussa",
        "image_autres_C1"=>"https://cuisinedescomores.com/wp-content/uploads/2021/07/Sambusa-min.jpg",
        "prix_autres_C1"=>"1.00€ (unité)",
        "desc_autres_C1"=>"- pâte à samboussa
                - Farce : viande hachée (bœuf), oignons, ail
                - Épices : piment, poivre, sel
                - Huile pour la friture"
    ];


    $plat_alsacien=[
        "plat_A1"=>"Tarte Flambée (Flammekueche)",
        "image_plat_A1"=>"https://images.radio-canada.ca/v1/alimentation/recette/16x9/tarte-flambee-flammekueche.jpg",
        "prix_plat_A1"=>"12€",
        "desc_plat_A1"=>"- Pâte à pain
                - Crème fraîche
                - Fromage blanc
                - Oignons émincés
                - Lardons
                - Sel, poivre, et muscade"
    ];
    $dessert_alsacien=[
        "dessert_A1"=>"Les Manele",
        "image_dessert_A1"=>"https://images.lesindesradios.fr/fit-in/400x2000/filters:format(webp)/medias/K5TLO8CvoX/image/Manalas-au-Thermomix-1637576749166.jpg",
        "prix_dessert_A1"=>"4.50€ ", 
        "desc_dessert_A1"=>" - Farine
                - Levure de boulanger
                - Sucre
                - Beurre
                - Lait
                - Œufs
                - Pépites de chocolat ou raisins secs
                - Sel",

        "dessert_A2"=>"Bretzel",
        "image_dessert_A2"=>"https://www.geiler.fr/en/media/1400x650/285-13264-comment-resister-a-un-bretzel-bien-dore-1500x0-1",
        "prix_dessert_A2"=>"1€",
        "desc_dessert_A2"=>"- Farine
                - Eau
                - Levure de boulanger
                - Sucre
                - Sel
                - Bicarbonate de soude
                - Gros sel"
        

    ];

    ?>
    <head>
        <title> Restaurants AlsaComo </title>
    </head>

    <body>
        <h1> Plats comorien </h1>
        <h2> Plats </h2>       
        <ul>
            <h2> Nom: <?php echo $plat_comorien["plat_C1"]?> </h2>
            <img src = <?php echo $plat_comorien["image_plat_C1"]?> width="400" height="400">
            <li> Description : <?php echo $plat_comorien["desc_plat_C1"]?>
                
             </li>
            <li> Prix : <?php echo $plat_comorien["prix_plat_C1"]?> </li>
        </ul>


        <h2> Desserts/Pâtisseries </h2>
        <ul>
            <h2> Nom: <?php echo $dessert_comorien["dessert_C1"]?> </h2>
            <img src = <?php echo $dessert_comorien["image_dessert_C1"]?> width="400" height="300"> 
            <li> Description : <?php echo $dessert_comorien["desc_dessert_C1"]?> </li>
            <li> Prix :<?php echo $dessert_comorien["prix_dessert_C1"]?>  </li>
        </ul>


        <h2> Autres </h2>
        <ul>
            <h2> Nom: <?php echo $autres_comorien["autres_C1"]?></h2>
            <img src = <?php echo $autres_comorien["image_autres_C1"]?> width="400" height="300"> 
            <li> Description : <?php echo $autres_comorien["desc_autres_C1"]?>
                
            </li>
            <li> Prix : <?php echo $autres_comorien["prix_autres_C1"]?> </li>
        </ul>

        <br>
        
        <h1> Plats alsacien </h1>
        <h2> Plat </h2>
        <ul>
            <h2> Nom: <?php echo $plat_alsacien["plat_A1"]?> </h2>
            <img src = <?php echo $plat_alsacien["image_plat_A1"]?> width="400" height="250">
            <li> Description :<?php echo $plat_alsacien["desc_plat_A1"]?>
                
              </li>
            <li> Prix : <?php echo $plat_alsacien["prix_plat_A1"]?>  </li>
        </ul>


        <h2> Desserts/Pâtisseries </h2>
        <ul>
            <h2> Nom: <?php echo $dessert_alsacien["dessert_A1"]?> </h2>
            <img src = <?php echo $dessert_alsacien["image_dessert_A1"]?> width="400" height="400">
            <li> Description :<?php echo $dessert_alsacien["desc_dessert_A1"]?>
              </li>
            <li> Prix : <?php echo $dessert_alsacien["prix_dessert_A1"]?> </li>
        </ul>
        <ul>
            <h2> Nom: <?php echo $dessert_alsacien["dessert_A2"]?> </h2>
            <img src = <?php echo $dessert_alsacien["image_dessert_A2"]?> width="400" height="250">
            <li> Description :<?php echo $dessert_alsacien["desc_dessert_A2"]?>
                
            </li>
            <li> Prix : <?php echo $dessert_alsacien["prix_dessert_A2"]?> </li>
        </ul>
    </body>
</html>