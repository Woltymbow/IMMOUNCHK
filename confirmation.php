<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Confirmation</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
font-family: 'Poppins', sans-serif;
background: #ffffff; /* Même fond vert que profil */
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
padding: 30px 10px;
}
.phone {
width: 100%;
max-width: 380px;
background: white;
border-radius: 25px;
padding: 40px 25px;
box-shadow: 0 2px 15px rgba(0,0,0,0.08);
text-align: center;
}
.titre {
text-align: center;
color: #000;
font-size: 13px;
font-weight: 600;
margin-bottom: 40px;
letter-spacing: 0.5px;
}
.check-icon {
width: 70px;
height: 70px;
background: #31589f;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
margin: 0 auto 25px;
}
.check-icon svg {
width: 40px;
height: 40px;
stroke: white;
stroke-width: 3;
fill: none;
}
h2 {
font-size: 18px;
color: #1F2937;
font-weight: 600;
margin-bottom: 15px;
}
p {
font-size: 14px;
color: #4b5563;
line-height: 1.6;
margin-bottom: 10px;
}
.btn-retour {
display: block;
width: 100%;
background: #31589f;
color: white;
text-align: center;
padding: 15px;
border-radius: 12px;
font-size: 15px;
font-weight: 500;
text-decoration: none;
margin-top: 35px;
transition: background 0.2s;
}
.btn-retour:hover {
background: #31589f;
}
</style>
</head>
<body>
<div class="phone">


<div class="check-icon">
<svg viewBox="0 0 24 24">
<polyline points="20 6 9 17 4 12"></polyline>
</svg>
</div>

<h2>Demande envoyée !</h2>
<p>Votre demande de logement a été<br>envoyé avec succès</p>
<p>Nous vous contacterons bientôt.</p>

<a href="accueil.php" class="btn-retour">Retour à l'accueil</a>
</div>
</body>
</html>