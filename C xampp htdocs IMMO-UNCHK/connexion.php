<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f5f5;
        }

        .login-box{
            width:400px;
            margin:80px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        .btn-blue{
            background:#31589f;
            color:white;
        }

        img{
            width:100px;
            display:block;
            margin:auto;
        }
    </style>
</head>

<body>

<div class="login-box">

<img src="logo.jpg">

<h4 class="text-center mb-4">Connectez-vous à votre compte</h4>

<form action="traitement_connexion.php" method="POST">

<div class="mb-3">
<label>Email ou téléphone</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Mot de passe</label>
<input type="password" name="password" class="form-control" required>
</div>


<button class="btn btn-blue w-100">Se connecter</button>

</form>

<br>

<a href="inscription.php" class="btn btn-outline-secondary w-100">Créer un compte</a>

<br>

<a href="../liste_des_bien/biens.php" class="btn btn-light w-100 mt-2">Continuer sans compte</a>

</div>

</body>
</html>