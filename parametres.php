<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Paramètres - IMMO UNCHK</title>
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
background: #f0f0f0;
min-height: 100vh;
display: flex;
flex-direction: column;
padding-bottom: 60px;
}
.header-params {
display: flex;
align-items: center;
padding: 12px;
background: white;
border-bottom: 1px solid #e0e0e0;
}
.back-btn {
font-size: 24px;
color: #000;
text-decoration: none;
width: 30px;
}
.header-params .titre {
flex: 1;
text-align: center;
font-size: 16px;
font-weight: bold;
color: #000;
margin-right: 30px;
}
.content {
padding: 15px 12px;
flex: 1;
}
.card {
background: white;
border-radius: 10px;
margin-bottom: 20px;
overflow: hidden;
}
.param-item {
display: flex;
align-items: center;
justify-content: space-between;
padding: 14px 12px;
text-decoration: none;
color: #000;
font-size: 15px;
border-bottom: 1px solid #f0f0f0;
cursor: pointer;
}
.param-item:last-child { border-bottom: none; }
.param-gauche { display: flex; align-items: center; gap: 12px; }
.param-icon {
width: 24px;
height: 24px;
display: flex;
align-items: center;
justify-content: center;
}
.param-icon svg {
width: 20px;
height: 20px;
fill: #333;
}
.param-fleche {
font-size: 16px;
color: #999;
font-weight: bold;
}
.param-valeur {
font-size: 14px;
color: #666;
}
.section-title {
font-size: 13px;
color: #666;
padding: 0 12px 8px 12px;
font-weight: normal;
text-transform: uppercase;
}
.deconnexion, .supprimer { color: #cc0000 !important; }
.deconnexion .param-icon svg, .supprimer .param-icon svg { fill: #cc0000; }

/* MODAL */
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
.btn-deconnexion, .btn-supprimer {
width: 100%;
color: white;
border: none;
border-radius: 25px;
padding: 14px;
font-size: 16px;
font-weight: bold;
cursor: pointer;
margin-bottom: 12px;
}
.btn-deconnexion { background: #5a5a5a; }
.btn-supprimer { background: #cc0000; }
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
.nav-icon svg {
width: 20px;
height: 20px;
fill: none;
stroke: #999;
stroke-width: 1.5;
}
</style>
</head>
<body>
<div class="phone">

<div class="header-params">
<a href="profil.php" class="back-btn">‹</a>
<span class="titre">Paramètres</span>
</div>

<div class="content">

<div class="section-title">Compte</div>
<div class="card">
<a href="modifier_profil.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
</span>
<span>Modifier mon profil</span>
</div>
<span class="param-fleche">›</span>
</a>
<a href="verifier_identite.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
</span>
<span>Vérifier mon identité</span>
</div>
<span class="param-fleche">›</span>
</a>
<a href="securite.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
</span>
<span>Mot de passe et sécurité</span>
</div>
<span class="param-fleche">›</span>
</a>
</div>

<div class="section-title">Préférences</div>
<div class="card">
<a href="criteres_recherche.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
</span>
<span>Critères de recherche</span>
</div>
<span class="param-fleche">›</span>
</a>
<a href="zones_favorites.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
</span>
<span>Zones favorites</span>
</div>
<span class="param-fleche">›</span>
</a>
<a href="theme.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zM12 18c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6zm0-10c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"/></svg>
</span>
<span>Thème sombre/clair</span>
</div>
<span class="param-valeur">Clair ›</span>
</a>
</div>

<div class="section-title">Notifications</div>
<div class="card">
<a href="notifications_prefs.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/></svg>
</span>
<span>Gérer les notifications</span>
</div>
<span class="param-fleche">›</span>
</a>
</div>

<div class="section-title">Assistance</div>
<div class="card">
<a href="contact.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
</span>
<span>Contactez le service client</span>
</div>
<span class="param-fleche">›</span>
</a>
<a href="agents.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
</span>
<span>Agents à proximité</span>
</div>
<span class="param-fleche">›</span>
</a>
<a href="faq.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg>
</span>
<span>FAQ</span>
</div>
<span class="param-fleche">›</span>
</a>
</div>

<div class="section-title">Sécurité</div>
<div class="card">
<a href="appareils.php" class="param-item">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/></svg>
</span>
<span>Appareils connectés</span>
</div>
<span class="param-fleche">›</span>
</a>
<div class="param-item supprimer" onclick="openDeleteModal()">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
</span>
<span>Supprimer le compte</span>
</div>
</div>
<div class="param-item deconnexion" onclick="openLogoutModal()">
<div class="param-gauche">
<span class="param-icon">
<svg viewBox="0 0 24 24"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.59L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
</span>
<span>Se déconnecter</span>
</div>
</div>
</div>

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

<!-- MODAL SUPPRESSION COMPTE -->
<div class="modal-overlay" id="deleteModal">
<div class="modal-content">
<h2>Supprimer définitivement votre compte ?</h2>
<p>Cette action est irréversible. Toutes vos données, favoris et demandes seront supprimés définitivement.</p>
<button class="btn-supprimer" onclick="window.location.href='supprimer_compte.php'">Supprimer mon compte</button>
<button class="btn-annuler" onclick="closeDeleteModal()">Annuler</button>
</div>
</div>

<div class="bottom-nav">
<a href="accueil.php" class="nav-item">
<span class="nav-icon">
<svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
</span>
<span>Accueil</span>
</a>
<a href="mes_favoris.php" class="nav-item">
<span class="nav-icon">
<svg viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
</span>
<span>Favorit</span>
</a>
<a href="recherche.php" class="nav-item">
<span class="nav-icon">
<svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
</span>
<span>Recherche</span>
</a>
<a href="messages.php" class="nav-item">
<span class="nav-icon">
<svg viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"/></svg>
</span>
<span>Messagerie</span>
</a>
<a href="profil.php" class="nav-item">
<span class="nav-icon">
<svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
</span>
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
function openDeleteModal() {
document.getElementById('deleteModal').classList.add('active');
}
function closeDeleteModal() {
document.getElementById('deleteModal').classList.remove('active');
}

document.getElementById('logoutModal').addEventListener('click', function(e) {
if (e.target === this) closeLogoutModal();
});
document.getElementById('deleteModal').addEventListener('click', function(e) {
if (e.target === this) closeDeleteModal();
});
</script>
</body>
</html>