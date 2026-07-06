<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ton CSS -->
    <link rel="stylesheet" href="style.css">

    <style>
        body{
            background:#f5f5f5;
        }

        .register-box{
            width:400px;
            margin:60px auto;
            padding:30px;
            background:white;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        .btn-blue{
            background:#31589f;
            color:white;
        }
    </style>
</head>

<body>

<div class="register-box">

    <h3 class="text-center mb-4">Créer un compte</h3>

    <form action="traitement_inscription.php" method="POST">

        <div class="mb-3">
            <label>Nom complet</label>
            <input type="text" name="nom" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" name="telephone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Mot de passe</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-blue w-100">
            S'inscrire
        </button>

    </form>

    <br>

    <a href="connexion.php" class="btn btn-outline-secondary w-100">
        Retour connexion
    </a>

</div>

</body>
</html>