<?php
$conn = mysqli_connect("localhost","root","","immounchk");

$id = $_GET['id'];

if (isset($id)) {
    $stmt = $conn->prepare("DELETE FROM bien_immo WHERE id_bien = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: gerer_bien.php");
exit();
?>