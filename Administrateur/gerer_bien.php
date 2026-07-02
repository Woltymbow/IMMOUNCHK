<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>

<?php
$conn = mysqli_connect("localhost","root","","immounchk");

$result = mysqli_query($conn,"SELECT * FROM bien_immo");

while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
        <td><?= $row['id_bien'] ?></td>

        <td>
            <img src="images/<?= $row['photo'] ?>" width="80"
            onerror="this.src"='images/default.jpg'">
        </td>

        <td><?= $row['titre'] ?></td>

        <td><?= $row['prix'] ?> FCFA</td>

        <td>
            <a href="modifier_bien.php?id=<?= $row['id_bien'] ?>">Modifier</a> |
            <a href="supprimer_bien.php?id=<?= $row['id_bien'] ?>"
               onclick="return confirm('Supprimer ce bien ?')">
               Supprimer
            </a>
        </td>
    </tr>
<?php } ?>

</table>