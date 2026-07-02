<?php
$conn = mysqli_connect("localhost","root","","immounchk");

if(!$conn){
    die("Erreur connexion : " . mysqli_connect_error());
}

if(isset($_POST['id_demande']) && isset($_POST['statut'])){

    $id = $_POST['id_demande'];
    $statut = $_POST['statut'];

    $sql = "UPDATE demande SET statut='$statut' WHERE id_demande=$id";

    if(mysqli_query($conn,$sql)){
        header("Location: gerer_demandes.php");
        exit();
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}
?>