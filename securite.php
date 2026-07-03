<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mot de passe et sécurité</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial,sans-serif;background:#f0f0f0;display:flex;justify-content:center}
.phone{width:100%;max-width:380px;background:#f0f0f0;min-height:100vh}
.header{display:flex;align-items:center;padding:12px;background:white;border-bottom:1px solid #e0e0e0}
.back-btn{font-size:24px;color:#000;text-decoration:none;width:30px}
.titre{flex:1;text-align:center;font-size:16px;font-weight:bold;margin-right:30px}
.content{padding:20px 15px}
.card{background:white;border-radius:10px;padding:20px}
.input-group{margin-bottom:18px}
.input-group label{display:block;font-size:13px;color:#666;margin-bottom:6px}
.input-group input{width:100%;padding:12px;border:1px solid #ddd;border-radius:8px;font-size:15px}
.btn-save{width:100%;background:#31589f;color:white;border:none;border-radius:25px;padding:14px;font-size:16px;font-weight:bold}
</style>
</head>
<body>
<div class="phone">
<div class="header">
<a href="parametres.php" class="back-btn">‹</a>
<span class="titre">Mot de passe et sécurité</span>
</div>
<div class="content">
<form class="card">
<div class="input-group">
<label>Ancien mot de passe</label>
<input type="password" required>
</div>
<div class="input-group">
<label>Nouveau mot de passe</label>
<input type="password" required>
</div>
<div class="input-group">
<label>Confirmer le mot de passe</label>
<input type="password" required>
</div>
<button type="submit" class="btn-save">Modifier le mot de passe</button>
</form>
</div>
</div>
</body>
</html>