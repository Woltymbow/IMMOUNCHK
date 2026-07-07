<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres</title>
    <link rel="stylesheet" href="style_admin.css">

    <style>
        .param-container{
            width: 70%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h2{
            margin-bottom: 20px;
        }

        .section{
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 15px;
        }

        button{
            background: #31589f;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .logout{
            background: red;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="param-container">

    <h1>Paramètres</h1>

    <!-- Profil -->
    <div class="section">
        <h2>Mon profil</h2>

        <p><strong>Nom :</strong> Administrateur</p>
        <p><strong>Email :</strong> admin@gmail.com</p>
        <p><strong>Rôle :</strong> Super Admin</p>
    </div>


    <!-- Mot de passe -->
    <div class="section">

        <h2>Changer le mot de passe</h2>

        <form action="" method="POST">

            <input type="password" name="ancien" placeholder="Ancien mot de passe">

            <input type="password" name="nouveau" placeholder="Nouveau mot de passe">

            <button type="submit">Modifier</button>

        </form>

    </div>


    <!-- Préférences -->
    <div class="section">

        <h2>Préférences</h2>

        <label>
            <input type="checkbox"> Activer les notifications
        </label>

    </div>


    <!-- Déconnexion -->
    <div class="section">

        <h2>Déconnexion</h2>

        <a href="logout.php">
            <button class="logout" onclick="confirmLogout()">Se déconnecter</button>
        </a>

    </div>

</div>
<script>
function confirmLogout() {
    let choix = confirm("Voulez-vous vraiment vous déconnecter ?");

    if (choix == true) {
        window.location.href = "logout.php";
    }
}
</script>

</body>
</html>