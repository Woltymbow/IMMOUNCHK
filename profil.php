<?php
session_start();
// En vrai tu récupères ça de ta BDD
$nom = "ALPHA DIALLO";
$email = "alpha.diallo@unchk.edu.sn";
$tel = "+221 77 123 45 67";
$photo = isset($_SESSION['photo']) ? $_SESSION['photo'] : 'default-avatar.png'; // photo par défaut
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil - IMMO UNCHK</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
font-family: Arial, sans-serif;
background: #f0f0f0;
display: flex;
justify-content: center;
}
.phone {
width: 100%;
max-width: 380px;
background: white;
min-height: 100vh;
display: flex;
flex-direction: column;
padding-bottom: 60px;
}

/* Header */
.header-profil {
display: flex;
align-items: center;
justify-content: space-between;
padding: 12px;
background: white;
border-bottom: 1px solid #e0e0e0;
}
.menu-btn {
font-size: 24px;
color: #000;
text-decoration: none;
width: 30px;
}
.header-profil .titre {
font-size: 16px;
font-weight: bold;
color: #000;
}
.settings-btn svg {
width: 22px;
height: 22px;
fill: #5a5a5a;
}

/* Infos user */
.user-info {
display: flex;
align-items: center;
gap: 12px;
padding: 20px 15px;
border-bottom: 1px solid #e0e0e0;
position: relative;
}
.user-avatar {
width: 60px;
height: 60px;
background: #b3c7e6;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
overflow: hidden;
cursor: pointer;
position: relative;
}
.user-avatar img {
width: 100%;
height: 100%;
object-fit: cover;
}
.user-avatar svg {
width: 32px;
height: 32px;
fill: #333;
}
.avatar-overlay {
position: absolute;
bottom: 0;
right: 0;
background: #5a5a5a;
width: 20px;
height: 20px;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
border: 2px solid white;
}
.avatar-overlay svg {
width: 12px;
height: 12px;
fill: white;
}
.user-details {
flex: 1;
}
.user-details h3 {
font-size: 16px;
font-weight: bold;
color: #000;
margin-bottom: 2px;
}
.user-details p {
font-size: 13px;
color: #666;
line-height: 1.3;
}
.btn-modifier {
position: absolute;
right: 15px;
top: 50%;
transform: translateY(-50%);
background: #f0f0f0;
border: none;
border-radius: 15px;
padding: 6px 12px;
font-size: 12px;
font-weight: bold;
color: #333;
cursor: pointer;
text-decoration: none;
}

/* Input file caché */
#photoInput { display: none; }

/* Liste */
.list-item {
display: flex;
align-items: center;
justify-content: space-between;
padding: 16px 15px;
text-decoration: none;
color: #000;
font-size: 15px;
border-bottom: 1px solid #f0f0f0;
cursor: pointer;
}
.list-gauche {
display: flex;
align-items: center;
gap: 12px;
}
.list-icon {
width: 24px;
height: 24px;
display: flex;
align-items: center;
justify-content: center;
font-size: 18px;
}
.list-fleche {
font-size: 16px;
color: #999;
font-weight: bold;
}

/* Déconnexion */
.deconnexion {
color: #cc0000 !important;
}

/* MODAL DECONNEXION */
.modal-overlay {
display: none;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0,0,0,0.4);
z-index: 999;
align-items: center;
justify-content: center;
}
.modal-overlay.active { display: flex; }
.modal-content {
background: white;
width: 90%;
max-width: 320px;
border-radius: 16px;
padding: 25px 20px 20px;
text-align: center;
box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}
.modal-content h2 {
font-size: 18px;
font-weight: bold;
color: #000;
margin-bottom: 12px;
line-height: 1.3;
}
.modal-content p {
font-size: 14px;
color: #666;
line-height: 1.4;
margin-bottom: 20px;
}
.btn-deconnexion {
width: 100%;
background: #5a5a5a;
color: white;
border: none;
border-radius: 25px;
padding: 14px;
font-size: 16px;
font-weight: bold;
cursor: pointer;
margin-bottom: 12px;
}
.btn-annuler {
width: 100%;
background: transparent;
color: #5a5a5a;
border: none;
padding: 10px;
font-size: 16px;
font-weight: bold;
cursor: pointer;
}

/* Bottom nav */
.bottom-nav {
position: fixed;
bottom: 0;
left: 50%;
transform: translateX(-50%);
width: 100%;
max-width: 380px;
background: white;
border-top: 1px solid #d9d9d9;
display: flex;
justify-content: space-around;
padding: 4px 0 6px;
}
.nav-item {
display: flex;
flex-direction: column;
align-items: center;
gap: 1px;
text-decoration: none;
color: #999;
font-size: 9px;
}
.nav-item.active { color: #333; }
.nav-icon svg {
width: 20px;
height: 20px;
fill: none;
stroke: #999;
stroke-width: 1.5;
}
.nav-item.active .nav-icon svg { stroke: #333; }
</style>
</head>
<body>
<div class="phone">

<div class="header-profil">
<a href="#" class="menu-btn">≡</a>
<span class="titre">Profil</span>
<a href="parametres.php" class="settings-btn">
<svg viewBox="0 0 24 24"><path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/></svg>
</a>
</div>

<form action="upload_photo.php" method="post" enctype="multipart/form-data" id="photoForm">
<input type="file" id="photoInput" name="photo" accept="image/*" onchange="this.form.submit()">
</form>

<div class="user-info">
<div class="user-avatar" onclick="document.getElementById('photoInput').click()">
<?php if($photo != 'default-avatar.png'): ?>
<img src="uploads/<?php echo $photo; ?>" alt="Photo profil">
<?php else: ?>
<svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
<?php endif; ?>
<div class="avatar-overlay">
<svg viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
</div>
</div>
<div class="user-details">
<h3><?php echo $nom; ?></h3>
<p><?php echo $email; ?><br><?php echo $tel; ?></p>
</div>
<a href="mes_informations.php" class="btn-modifier">Modifier</a>
</div>

<a href="mes_demandes.php" class="list-item">
<div class="list-gauche">
<span class="list-icon">📋</span>
<span>Mes demandes</span>
</div>
<span class="list-fleche">›</span>
</a>

<a href="mes_favoris.php" class="list-item">
<div class="list-gauche">
<span class="list-icon">♡</span>
<span>Mes favoris</span>
</div>
<span class="list-fleche">›</span>
</a>

<a href="mes_informations.php" class="list-item">
<div class="list-gauche">
<span class="list-icon">👤</span>
<span>Mes informations</span>
</div>
<span class="list-fleche">›</span>
</a>

<a href="notifications.php" class="list-item">
<div class="list-gauche">
<span class="list-icon">🔔</span>
<span>Notifications</span>
</div>
<span class="list-fleche">›</span>
</a>

<a href="parametres.php" class="list-item">
<div class="list-gauche">
<span class="list-icon">⚙️</span>
<span>Paramètres</span>
</div>
<span class="list-fleche">›</span>
</a>

<div class="list-item deconnexion" onclick="openLogoutModal()">
<div class="list-gauche">
<span class="list-icon">↩</span>
<span>Déconnexion</span>
</div>
<span class="list-fleche">›</span>
</div>

<!-- MODAL DECONNEXION -->
<div class="modal-overlay" id="logoutModal">
<div class="modal-content">
<h2>Voulez-vous vraiment vous déconnecter ?</h2>
<p>Vous avez enregistré vos identifiants afin de pouvoir vous reconnecter plus facilement. Vous pouvez modifier ce réglage dans l'écran de connexion.</p>
<button class="btn-deconnexion" onclick="window.location.href='deconnexion.php'">Déconnexion</button>
<button class="btn-annuler" onclick="closeLogoutModal()">Annuler</button>
</div>
</div>

<div class="bottom-nav">
<a href="accueil.php" class="nav-item">
<span class="nav-icon">🏠</span>
<span>Accueil</span>
</a>
<a href="mes_favoris.php" class="nav-item">
<span class="nav-icon">♡</span>
<span>Favorit</span>
</a>
<a href="recherche.php" class="nav-item">
<span class="nav-icon">🔍</span>
<span>Recherche</span>
</a>
<a href="messages.php" class="nav-item">
<span class="nav-icon">💬</span>
<span>Messagerie</span>
</a>
<a href="profil.php" class="nav-item active">
<span class="nav-icon">👤</span>
<span>Profil</span>
</a>
</div>
</div>

<script>
function openLogoutModal() {
document.getElementById('logoutModal').classList.add('active');
}
function closeLogoutModal() {
document.getElementById('logoutModal').classList.remove('active');
}

document.getElementById('logoutModal').addEventListener('click', function(e) {
if (e.target === this) closeLogoutModal();
});
</script>
</body>
</html>