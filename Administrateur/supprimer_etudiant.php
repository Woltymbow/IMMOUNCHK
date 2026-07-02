<?php
$conn = mysqli_connect("localhost","root","","immounchk");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM etudiant WHERE id_etudiant=$id");

header("Location: utilisateurs.php");
exit();
?>