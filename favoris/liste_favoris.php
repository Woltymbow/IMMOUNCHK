<?php

function afficherFavoris(){

$favoris = [

    [
        "id" => 1,
        "image" => "images/studio30.jpeg",
        "nom" => "Mini-Studio moderne❤️",
        "prix" => "30 000 FCFA/Mois",
        "ville" => "Diourbel, Sénégal"
    ],

    [
        "id" => 2,
        "image" => "images/colocation15.jpeg",
        "nom" => "Chambre en colocation moderne❤️",
        "prix" => "15 000 FCFA/mois",
        "ville" => "Diourbel, Sénégal"
    ],

    [
        "id" => 3,
        "image" => "images/individuelle20.jpeg",
        "nom" => "Chambre individuelle❤️",
        "prix" => "20 000 FCFA/Mois",
        "ville" => "Diourbel, Sénégal"
    ]

];

foreach($favoris as $bien){
?>

<div class="carte">

    <img class="image" src="<?= $bien['image'] ?>" style="width:100%; height:auto;">

    <h3 class="titre"><?= $bien['nom'] ?></h3>

    <p class="prix"><?= $bien['prix'] ?></p>

    <p class="localisation">📍 <?= $bien['ville'] ?></p>

    <form action="supprimer_favori.php" method="POST"
          onsubmit="return confirm('Voulez-vous vraiment supprimer ce favori ?');">

        <input type="hidden" name="id" value="<?= $bien['id'] ?>">

        <button class="btn btn-supprimer">
            Supprimer
        </button>

    </form>

</div>

<?php
}
}
?>