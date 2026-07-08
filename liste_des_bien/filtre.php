<?php

include("config.php");

$recherche = $_GET['recherche'];

$sql = "SELECT * FROM biens WHERE titre LIKE '%$recherche%' OR localisation LIKE '%$recherche%'";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

echo $row['titre']."<br>";

}
?>