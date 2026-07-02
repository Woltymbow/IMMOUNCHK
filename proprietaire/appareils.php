<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Appareils connectés</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial,sans-serif;background:#f0f0f0;display:flex;justify-content:center}
.phone{width:100%;max-width:380px;background:#f0f0f0;min-height:100vh}
.header{display:flex;align-items:center;padding:12px;background:white;border-bottom:1px solid #e0e0e0}
.back-btn{font-size:24px;color:#000;text-decoration:none;width:30px}
.titre{flex:1;text-align:center;font-size:16px;font-weight:bold;margin-right:30px}
.content{padding:15px 12px}
.card{background:white;border-radius:10px;overflow:hidden}
.app-item{display:flex;justify-content:space-between;align-items:center;padding:14px 12px;border-bottom:1px solid #f0f0f0}
.app-item:last-child{border-bottom:none}
.app-info h4{font-size:15px;margin-bottom:3px}
.app-info p{font-size:12px;color:#666}
.btn-deco{background:#cc0000;color:white;border:none;border-radius:15px;padding:6px 12px;font-size:12px;font-weight:bold}
</style>
</head>
<body>
<div class="phone">
<div class="header">
<a href="parametres.php" class="back-btn">‹</a>
<span class="titre">Appareils connectés</span>
</div>
<div class="content">
<div class="card">
<div class="app-item">
<div class="app-info">
<h4>iPhone 14 - Touba</h4>
<p>Actif maintenant</p>
</div>
<button class="btn-deco">Déconnecter</button>
</div>
<div class="app-item">
<div class="app-info">
<h4>Chrome - Windows</h4>
<p>Il y a 2 jours</p>
</div>
<button class="btn-deco">Déconnecter</button>
</div>
</div>
</div>
</body>
</html>