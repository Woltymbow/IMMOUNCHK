<?php
include("../page_connexion/config.php");
session_start();

$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$type = $_POST['type_logement'];
$email = $_POST['email'];
$localisation = $_POST['localisation'];

$document = "";

// upload fichier
if(isset($_FILES['document']) && $_FILES['document']['name'] != ""){
    $document = "uploads/" . basename($_FILES['document']['name']);
    move_uploaded_file($_FILES['document']['tmp_name'], $document);
}

$sql = "INSERT INTO demande_logement(nom, telephone, type_logement, budget, localisation, document) VALUES('$nom','$telephone','$type','$email','$localisation','$document')";

if(mysqli_query($conn, $sql)){
    header("Location: confirmation.php");
}else{
    echo "Erreur lors de l'envoi";
}
?>