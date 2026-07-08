<?php
session_start();
include "config.php";

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    die("Formulaire non envoyé");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM etudiant WHERE email='$email' AND mot_de_passe='$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){

    $row = mysqli_fetch_assoc($result);
    $_SESSION['id_etudiant'] = $row['id_etudiant'];

    header("Location: biens.php");

}else{
    echo "Email ou mot de passe incorrect";
}
?>