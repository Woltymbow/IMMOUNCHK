<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thème</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial,sans-serif;background:#f0f0f0;display:flex;justify-content:center}
.phone{width:100%;max-width:380px;background:#f0f0f0;min-height:100vh}
.header{display:flex;align-items:center;padding:12px;background:white;border-bottom:1px solid #e0e0e0}
.back-btn{font-size:24px;color:#000;text-decoration:none;width:30px}
.titre{flex:1;text-align:center;font-size:16px;font-weight:bold;margin-right:30px}
.content{padding:15px 12px}
.card{background:white;border-radius:10px;overflow:hidden}
.theme-item{display:flex;align-items:center;justify-content:space-between;padding:14px 12px;border-bottom:1px solid #f0f0f0}
.theme-item:last-child{border-bottom:none}
</style>
</head>
<body>
<div class="phone">
<div class="header">
<a href="parametres.php" class="back-btn">‹</a>
<span class="titre">Thème</span>
</div>
<div class="content">
<div class="card">
<div class="theme-item"><span>Clair</span><input type="radio" name="theme" checked></div>
<div class="theme-item"><span>Sombre</span><input type="radio" name="theme"></div>
<div class="theme-item"><span>Automatique</span><input type="radio" name="theme"></div>
</div>
</div>
</div>
</body>
</html>