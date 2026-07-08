<?php
$id_bien = $_GET['id'] ?? '';
?>

<h2>📞Contactez le propriétaire</h2>

<form method="POST">

    <input type="text" name="nom" placeholder="Votre nom"><br><br>

    <input type="text" name="telephone" placeholder="Téléphone"><br><br>

    <textarea name="message" placeholder="Votre message"></textarea><br><br>

    <button type="submit">Envoyer</button>

</form>