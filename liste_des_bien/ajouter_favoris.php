<?php
session_start();
include("config.php");

// à adapter selon ta session
$id_etudiant = $_SESSION['id_etudiant'];  

$id_bien = $_GET['id'];

$sql = "INSERT INTO favoris (id_etudiant, id_bien) VALUES ('$id_etudiant', '$id_bien')";

mysqli_query($conn, $sql);

header("Location: favoris.php");
?>
