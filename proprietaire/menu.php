<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu - IMMO-UNCHK</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

body {
font-family: 'Poppins', sans-serif;
background: #f5f5f5;
overflow-x: hidden;
}

/* Overlay sombre quand menu ouvert */
.overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0,0,0,0.5);
opacity: 0;
visibility: hidden;
transition: 0.3s;
z-index: 998;
}
.overlay.active {
opacity: 1;
visibility: visible;
}

/* Menu latéral */
.sidebar {
position: fixed;
top: 0;
left: -280px;
width: 280px;
height: 100%;
background: white;
box-shadow: 2px 0 10px rgba(0,0,0,0.1);
transition: 0.3s;
z-index: 999;
padding: 20px;
}
.sidebar.active {
left: 0;
}

/* Header du menu */
.sidebar-header {
display: flex;
align-items: center;
gap: 15px;
padding-bottom: 20px;
border-bottom: 2px solid #f0f0f0;
margin-bottom: 20px;
}
.sidebar-header img {
width: 50px;
height: 50px;
border-radius: 50%;
object-fit: cover;
}
.sidebar-header h3 {
font-size: 16px;
color: #31589f;
}
.sidebar-header p {
font-size: 12px;
color: #888;
}

/* Liens du menu */
.menu-item {
display: flex;
align-items: center;
gap: 15px;
padding: 15px;
border-radius: 10px;
text-decoration: none;
color: #31589f;
font-size: 15px;
margin-bottom: 5px;
transition: 0.2s;
}
.menu-item:hover, .menu-item.active {
background: #e8f0fe;
color: #31589f;
}
.menu-item .icon {
font-size: 20px;
}

/* Bouton fermer */
.close-btn {
position: absolute;
top: 15px;
right: 15px;
font-size: 24px;
color: #999;
cursor: pointer;
background: none;
border: none;
}

/* Contenu principal */
.main-content {
padding: 20px;
transition: 0.3s;
}
.header {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 30px;
}
.menu-btn {
font-size: 26px;
background: none;
border: none;
cursor: pointer;
color: #31589f;
}
.page-title {
font-size: 18px;
font-weight: 600;
color: #31589f;
}

/* Démo contenu */
.card {
background: white;
padding: 20px;
border-radius: 15px;
margin-bottom: 15px;
box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
</style>
</head>
<body>

<!-- Overlay -->
<div class="overlay" id="overlay" onclick="closeMenu()"></div>

<!-- Menu latéral -->
<div class="sidebar" id="sidebar">
<button class="close-btn" onclick="closeMenu()">×</button>

<div class="sidebar-header">
<img src="assets/avatar.jpg" alt="Avatar">
<div>
<h3>Alpha Diallo</h3>
<p>alpha@unchk.edu.sn</p>
</div>
</div>

<a href="accueil.php" class="menu-item">
<span class="icon">🏠</span>
<span>Accueil</span>
</a>

<a href="profil.php" class="menu-item">
<span class="icon">👤</span>
<span>Mon Profil</span>
</a>

<a href="demandes.php" class="menu-item">
<span class="icon">📄</span>
<span>Mes Demandes</span>
</a>

<a href="favoris.php" class="menu-item">
<span class="icon">♡</span>
<span>Favoris</span>
</a>

<a href="notifications.php" class="menu-item">
<span class="icon">🔔</span>
<span>Notifications</span>
</a>

<a href="parametres.php" class="menu-item">
<span class="icon">⚙️</span>
<span>Paramètres</span>
</a>

<a href="deconnexion.php" class="menu-item" style="color: #e74c3c; margin-top: 30px;">
<span class="icon">🚪</span>
<span>Déconnexion</span>
</a>
</div>

<!-- Contenu principal -->
<div class="main-content">
<div class="header">
<button class="menu-btn" onclick="openMenu()">☰</button>
<h1 class="page-title">Profil</h1>
</div>

<div class="card">
<h3>Bienvenue </h3>
<p>Clique sur ☰ en haut à gauche pour ouvrir le menu</p>
</div>

<div class="card">
<p>Infos de ton profil ici...</p>
</div>
</div>

<script>
function openMenu() {
document.getElementById('sidebar').classList.add('active');
document.getElementById('overlay').classList.add('active');
}

function closeMenu() {
document.getElementById('sidebar').classList.remove('active');
document.getElementById('overlay').classList.remove('active');
}
</script>

</body>
</html>