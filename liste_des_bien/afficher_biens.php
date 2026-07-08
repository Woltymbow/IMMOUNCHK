<?php

include("config.php");

if(isset($_GET['search'])){
    $search = $_GET['search'];

    $sql = "SELECT * FROM bien_immo WHERE titre LIKE '%$search%' OR adresse LIKE '%$search%'";
}else{
    $sql = "SELECT * FROM bien_immo";
}

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

?>

<div class="col-md-4">

<div class="card">

<img src="images/<?php echo htmlspecialchars($row['photo']); ?>" class="card-img-top">

<div class="card-body">

<h5><?php echo $row['titre']; ?></h5>

<p>
    📍
    <i class="fa-solid fa-localisation-dot"></i>
    <?php echo $row['adresse']; ?>
</p>

<p class="price">
    <i class=fa-solid fa-sack-dollar"></i>💰
   <strong><?php echo $row['prix']; ?> FCFA</strong></p>



<a href="detail.php?id=<?php echo $row['id_bien']; ?>" class="btn btn-success">Voir détails</a>
<a href="ajouter_favoris.php?id=<?php echo $row['id_bien']; ?>" class="btn-danger">❤️Favori</a>

</div>

</div>

</div>

<?php } ?>