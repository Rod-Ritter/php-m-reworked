<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP Mehdi</title>
    <link rel="stylesheet" href="./assets/css/exercicesStyle.css">
</head>

<body>

</body>

</html>


<?php
include('./includes/fonctions.php');
/*
- Créer un tableau php avec ses nombres : 27,15,34,379,248,5643,81,211,999,142,300,572
- Tester les nombres de ce tableau pour savoir si chaque nombre est pair ou impair (un nombre est pair si le resultat de la division par 2 est 0)
- Afficher les résultats sous forme de liste html `ul` comme ceci (xx,yy sont les nombres tu tableau) :

* xx : pair
* yy : impaire
...
*/
// $nbs = [27,15,34,379,248,5643,81,211,999,142,300,57];
// echo "<ul>";
// foreach($nbs as $nb) {
//     if($nb % 2 === 0) {
//         echo "<li>$nb : paire</li>";
//     } else {
//         echo "<li>$nb : impair</li>";
//     }
// }
// echo "</ul>";

// $users = [
//     "firstname" => "Mike",
//     "lastname" => "Olganh",
//     "pseudo" => "",
//     "age" => 34,
//     "food" => "",
//     "sport" => ""
// ];
// Parcourir le tableau user et pour toutes les entrees vide mettre "Aucune Information"

// foreach($users as $key => $value) {
//     if ($value == ""){
//         echo "$key : Aucune Information<br>";
//     } else {
//         echo "$key: $value<br>";
//     }
// }

// $nombres = [4,15,2,145,42,5,78,12];

// Trouver le nombre maximal de ce tableau
//  echo max($nombres);0
// $maxNombres = $nombres[0];
// foreach($nombres as $nombre) {
//     if($nombre > $maxNombres) {
//         $maxNombres = $nombre;
//     }
// }
// echo $maxNombres;

// $users_json = file_get_contents('https://randomuser.me/api/?results=20');

// Afficher pour les informations des 10 users du ficier json
// Photo
// nom prenom
// email
// age
// adresse
// telephone

/*$json_peoples = '[{
    "nom" : "Nooravi",
    "prenom" : "Amir",
    "age" : 41,
    "couleurs" : ["rouge", "vert", "blanc"],
    "image" : "https://ximg.es/64x64/000/fff"
    
    },{
    "nom" : "Mousfi",
    "prenom" : "Sara",
    "age" : 29,
    "couleurs" : ["bleu", "blanc", "rouge"],
    "image" : "https://ximg.es/64x64/000/fff"
        
    }]';

// // debug($json_peoples);


$peoples_array_php = json_decode($json_peoples, true);
debug($peoples_array_php);

// echo $peoples_array_php[0]['image'];
echo '<br>';
echo "Le nom de Sara est " . $peoples_array_php[1]['nom'];
?>

<div> <img src="<?php echo $peoples_array_php[0]['image'];?>" alt=""></div><?php
*/





// __________________récupération des données dans le fichier json____________________

$users_json = file_get_contents("./data/users.json");

// __________________conversion des données json en variable php_______________________

$users_array = json_decode($users_json, true);


//ajout d'un titre
//mise en place d'une boucle foreach pour aller chercher tous les profils dans $user_array
//puis retourner les elements du tableau dont nous avons besoin dans la div "card__user"
?>
<h2 id="titre">People's Databank</h2>

<div class="container">
    <?php
    foreach ($users_array['results'] as $user) {
    ?>

        <div class="card__user">
            <div class="profilePhotos">
                <img src="<?= $user['picture']['large'] ?>" alt="<?= $user['name']['first'] ?> <?= $user['name']['last'] ?>">
            </div>
            <div class="text">
                <p><?= $user['name']['first'] ?> <?= $user['name']['last'] ?></p>
                <p><?= $user['email'] ?></p>
                <p><?= $user['dob']['age'] ?> years old</p>
                <p><?= $user['location']['street']['name'] ?></p>
                <p><?= $user['phone'] ?></p>
            </div>
        </div>

    <?php
    }
    ?>
</div>











<?php

/*Travaller avec le fichier json persons.json dans le dossier Travaux
    Afficher le(a) deuxieme ami(e) de Raymond Jimenez dans un titre html <h3>
    Afficher la couleur des yeux de Ball Shaffer en gras html strong sous la forme d'une phrase : La couleur des yeux de Ball Shaffer est :
    Afficher dans une balise html article dans l'ordre suivant :
        image de la personne dans une balise html img
        Nom : le nom de la personne
        Age: age de la personne
        Couleur des yeux : la couleur des yeux de la personne
        Email: email de la personne
        Age: age de la personne
        Fruit favori : fruit favori de la personne
        Si isActive est à true : afficher ACTIF
        Tags : afficher tous les tags de la personne séparé d'une virgule
        Ne pas afficher la derniere la deniere virgule de tous les tags
        Chaque personne sera séparé d'une ligne horizontale html <hr>

Vous trouverez une capture du resultat attendu. */
