<?php
include("config.php");
session_start();

if (!isset($_GET['id'])) {
    echo "Bien introuvable";
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM bien_immo WHERE id_bien = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "Bien introuvable";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Détail du bien</title>

    <style>
        img{
            width:100%;
            max-height:400px;
            object-fit:cover;
        }

        .container{
            width:60%;
            margin:auto;
            background:#fff;
            padding:20px;
        }

        .price{
            color:#31589f;
            font-size:20px;
            font-weight:bold;
        }

        .btn{
            display:inline-block;
            padding:10px;
            background:#31589f;
            color:white;
            text-decoration:none;
            margin-top:10px;
        }
    </style>
</head>

<body>

<div class="container">

    <p>Type : <?= $row['type'] ?></p>

    <img src="images/<?= $row['photo'] ?>" alt="">

    <h2><?= $row['titre'] ?></h2>

    <p><b>📍Adresse :</b> <?= $row['adresse'] ?></p>

    <p class="price"><?= $row['prix'] ?> FCFA</p>


    <p><strong>Description : </strong> <?= $row['description']; ?></p>

     <a href="contacter_proprietaire.php?id=<?= $row['id_bien']; ?>" class="btn btn-primary mt-2">📞Contactez le propriétaire</a>

    <!-- FAVORIS -->
    <a class="btn" href="ajouter_favoris.php?id=<?= $row['id_bien'] ?>">❤️ Ajouter aux favoris</a>

    <br>

    </a>

</div>

</body>
</html>
