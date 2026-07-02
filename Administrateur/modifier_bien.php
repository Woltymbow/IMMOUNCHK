<?php
$conn = mysqli_connect("localhost","root","","immounchk");

$id = $_GET['id'];

// récupérer le bien
$result = mysqli_query($conn, "SELECT * FROM bien_immo WHERE id_bien=$id");
$bien = mysqli_fetch_assoc($result);
?>

<h2>Modifier un bien</h2>

<form method="POST">
    <label>Titre</label>
    <input type="text" name="titre" value="<?= $bien['titre'] ?>">

    <label>Prix</label>
    <input type="text" name="prix" value="<?= $bien['prix'] ?>">

    <button type="submit" name="update">Modifier</button>
</form>

<?php
if (isset($_POST['update'])) {
    $titre = $_POST['titre'];
    $prix = $_POST['prix'];

    mysqli_query($conn, "UPDATE bien_immo 
        SET titre='$titre', prix='$prix' 
        WHERE id_bien=$id");

    header("Location: gerer_bien.php");
}
?>