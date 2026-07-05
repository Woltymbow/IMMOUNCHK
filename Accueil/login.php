<?php
session_start();
require "connexion.php";

$error = "";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['mot_de_passe'];

    // chercher étudiant
    $stmt = $pdo->prepare("SELECT * FROM etudiant WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {

        // ⚠️ comparaison simple (sans hash pour ton projet)
        if ($password == $user['mot_de_passe']) {

            $_SESSION['id'] = $user['id_etudiant'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['role'] = "etudiant";

            header("Location: Accueil/accueil.php");
            exit();

        } else {
            $error = "Mot de passe incorrect";
        }

    } else {
        $error = "Email introuvable";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>

<h2>Connexion</h2>

<form method="POST">

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
    <br><br>

    <button type="submit" name="login">Se connecter</button>

</form>

<p style="color:red;">
    <?= $error ?>
</p>

</body>
</html>