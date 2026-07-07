<?php
session_start();
include("config.php");

$sql = "SELECT bien_immo.* FROM bien_immo INNER JOIN favoris ON bien_immo.id_bien = favoris.id_bien";

$result = mysqli_query($conn, $sql);
?>

<h1>Mes Favoris ❤️</h1>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<div class="card">

<img src="images/<?= $row['photo'] ?>" width="200">

<h3><?= $row['titre'] ?></h3>

<p><?= $row['prix'] ?> FCFA</p>

<a href="detail.php?id=<?= $row['id_bien'] ?>">Voir détails</a>

</div>

<?php } ?>