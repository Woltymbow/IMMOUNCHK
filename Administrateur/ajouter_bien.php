<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un bien</title>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>

<div class="form-container">
    <h2>Ajouter un bien</h2>

    <form action="traitement_bien.php" method="POST" enctype="multipart/form-data">

        <label>Titre</label>
        <input type="text" name="titre" required>

        <label>Description</label>
        <textarea name="description" required></textarea>

        <label>Prix</label>
        <input type="number" name="prix" required>

        <label>Localisation</label>
        <input type="text" name="localisation" required>

        <label>Type</label>
        <select name="type">
            <option>Chambre individuelle</option>
            <option>Colocation</option>
            <option>Studio</option>
        </select>

        <label>Photo</label>
        <input type="file" name="photo">

        <button type="submit">Enregistrer</button>

    </form>
</div>

</body>
</html>