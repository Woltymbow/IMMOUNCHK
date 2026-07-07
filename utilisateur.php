<?php
$conn = mysqli_connect("localhost","root","","immounchk");

if(!$conn){
    die("Erreur connexion");
}

$result = mysqli_query($conn, "SELECT * FROM etudiant");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Utilisateurs</title>

<style>
body{
    font-family: Arial;
    padding:20px;
    background:#f4f4f4;
}

.container{
    width:90%;
    margin:auto;
    background:white;
    padding:20px;
    border-radius:10px;
}

h2{
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse: collapse;
}

th, td{
    border:1px solid #ddd;
    padding:12px;
    text-align:center;
}

th{
    background:#31589f;
    color:white;
}

.delete{
    background:red;
    color:white;
    padding:8px 12px;
    text-decoration:none;
    border-radius:5px;
}
</style>

</head>
<body>

<div class="container">

<h2>Liste des utilisateurs</h2>

<table>

<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Email</th>
    <th>Téléphone</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['id_etudiant']; ?></td>
    <td><?php echo $row['nom']; ?></td>
    <td><?php echo $row['prenom']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['telephone']; ?></td>

    <td>
        <a class="delete"
        href="supprimer_etudiant.php?id=<?php echo $row['id_etudiant']; ?>"
        onclick="return confirm('Supprimer cet étudiant ?')">
        Supprimer
        </a>
    </td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>