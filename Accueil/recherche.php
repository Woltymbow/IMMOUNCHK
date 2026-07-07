<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Recherche</title>
</head>
<body>

<h2>Rechercher un logement</h2>

<!-- 🔵 BARRE DE RECHERCHE (toujours visible) -->
<form method="GET">
    <input type="text" name="motcle" placeholder="studio, chambre, colocation...">
    <button type="submit">Rechercher</button>
</form>

<hr>

<?php
$conn = mysqli_connect("localhost","root","","immounchk");

// 🔵 Si l’utilisateur a cliqué sur rechercher
if(isset($_GET['motcle']) && !empty($_GET['motcle'])){

    $motcle = $_GET['motcle'];

    $sql = "SELECT * FROM bien_immo 
            WHERE type LIKE '%$motcle%' 
            OR titre LIKE '%$motcle%'";

    $result = mysqli_query($conn,$sql);

    echo "<h3>Résultats de recherche :</h3>";

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px;'>";

            echo "<h3>".$row['titre']."</h3>";
            echo "<p>".$row['description']."</p>";
            echo "<p><b>Prix :</b> ".$row['prix']." FCFA</p>";
            echo "<p><b>Type :</b> ".$row['type']."</p>";

            echo "<img src='images/".$row['photo']."' width='200'>";

            echo "</div>";
        }

    } else {
        echo "Aucun résultat trouvé.";
    }

}
?>

</body>
</html>