<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Demande de logement</title>
    <link rel="stylesheet" href="style_demande.css">
</head>

<body>

<div class="container">
    

    <h2>Demande de logement</h2>

    <div class="steps">

    <div class="step active">
        <div class="circle">1</div>
        <p>Informations personnelles</p>
    </div>

    <div class="line"></div>

    <div class="step">
        <div class="circle">2</div>
        <p>Détails</p>
    </div>

    <div class="line"></div>

    <div class="step">
        <div class="circle">3</div>
        <p>Confirmation</p>
    </div>

</div>
    <form action="traitement_demande.php" method="POST" enctype="multipart/form-data">

        <label>Nom complet</label>
        <input type="text" name="nom" required>

        <label>Téléphone</label>
        <input type="text" name="telephone" required>

        <label>Type de logement</label>
        <select name="type_logement" required>
            <option>Chambre individuelle</option>
            <option>Studio moderne</option>
            <option>Chambre collective</option>
        </select>

        <label>email</label>
        <input type="text" name="email" required>

        <label>Localisation</label>
        <input type="text" name="localisation" required>

        <label>Pièce jointe (optionnel)</label>
        <input type="file" name="document">

        <button type="submit">Envoyer la demande</button>

    </form>

</div>

</body>
</html>