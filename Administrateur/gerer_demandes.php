<?php
$conn = mysqli_connect("localhost","root","","immounchk");

if(!$conn){
    die("Connexion échouée : " . mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT * FROM demande");

if(!$result){
    die("Erreur SQL : " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gérer les demandes</title>
    <link rel="stylesheet" href="style_admin.css">
</head>

<body>

<div class="table-container">
    <h2>Demandes reçues</h2>

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>ID Étudiant</th>
            <th>ID Biens</th>
            <th>Date</th>
            <th>Statut</th>
            <th>Message</th>
            <th>Action</th>
        </tr>

        <?php
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
            <td><?php echo $row['id_demande']; ?></td>
            <td><?php echo $row['id_etudiant']; ?></td>
            <td><?php echo $row['id_bien']; ?></td>
            <td><?php echo $row['date_demande']; ?></td>
            <td><?php echo $row['statut']; ?></td>
            <td><?php echo $row['message']; ?></td>

            <td>
                <form action="update_statut.php" method="POST">
                    <input type="hidden" name="id_demande" value="<?php echo $row['id_demande']; ?>">

                    <select name="statut">
                        <option value="En attente">En attente</option>
                        <option value="Acceptée">Acceptée</option>
                        <option value="Refusée">Refusée</option>
                    </select>

                    <button type="submit">Valider</button>
                </form>
            </td>
        </tr>

        <?php
            }
        } else {
            echo "<tr><td colspan='7'>Aucune demande trouvée</td></tr>";
        }
        ?>

    </table>
</div>

</body>
</html>