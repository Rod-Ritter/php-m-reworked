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

$users_json = file_get_contents("./data/users.json");
// $users_json = file_get_contents('https://randomuser.me/api/?results=20');

// Afficher pour les informations des 10 users du ficier json
// Photo
// nom prenom
// email
// age
// adresse
// telephone

$users_array = json_decode($users_json,true);
// debug($users_array);

foreach($users_array['results'] as $user) {
    ?>
    <div class="card__user">
        <p><img src="<?=$user['picture']['large']?>" alt="<?=$user['name']['first']?> <?=$user['name']['last']?>"></p>
        <p><?=$user['name']['first']?> <?=$user['name']['last']?></p>
        <p><?=$user['email']?></p>
        <p><?=$user['dob']['age']?> years old</p>
        <p><?=$user['location']['street']['name']?></p>
        <p><?=$user['phone']?></p>
    </div> -->
    <?php
 }


/*
Travaller avec le fichier json persons.json dans le dossier Travaux
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

Vous trouverez une capture du resultat attendu.
*/