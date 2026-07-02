<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Critères de recherche</title>
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
.input-group select,.input-group input{width:100%;padding:12px;border:1px solid #ddd;border-radius:8px;font-size:15px}
.btn-save{width:100%;background:#5a5a5a;color:white;border:none;border-radius:25px;padding:14px;font-size:16px;font-weight:bold}
</style>
</head>
<body>
<div class="phone">
<div class="header">
<a href="parametres.php" class="back-btn">‹</a>
<span class="titre">Critères de recherche</span>
</div>
<div class="content">
<form class="card">
<div class="input-group">
<label>Type de bien</label>
<select>
<option>Studion Moderne</option>
<option>Chambre Individuelle</option>
<option>Chambre Collective</option>
<option>Salle de Travail</option>
</select>
</div>
<div class="input-group">
<label>Budget max FCFA</label>
<input type="number" placeholder="300000">
</div>
<div class="input-group">
<label>Nombre de chambres min</label>
<input type="number" value="2">
</div>
<button type="submit" class="btn-save">Enregistrer</button>
</form>
</div>
</body>
</html>