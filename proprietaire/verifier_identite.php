<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vérifier mon identité</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial,sans-serif;background:#f0f0f0;display:flex;justify-content:center}
.phone{width:100%;max-width:380px;background:#f0f0f0;min-height:100vh}
.header{display:flex;align-items:center;padding:12px;background:white;border-bottom:1px solid #e0e0e0}
.back-btn{font-size:24px;color:#000;text-decoration:none;width:30px}
.titre{flex:1;text-align:center;font-size:16px;font-weight:bold;margin-right:30px}
.content{padding:20px 15px;text-align:center}
.card{background:white;border-radius:10px;padding:30px 20px}
.card p{font-size:14px;color:#666;line-height:1.5;margin-bottom:20px}
.upload-box{border:2px dashed #ccc;border-radius:10px;padding:40px 20px;margin-bottom:20px}
.btn-upload{width:100%;background:#31589f;color:white;border:none;border-radius:25px;padding:14px;font-size:16px;font-weight:bold}
</style>
</head>
<body>
<div class="phone">
<div class="header">
<a href="parametres.php" class="back-btn">‹</a>
<span class="titre">Vérifier mon identité</span>
</div>
<div class="content">
<div class="card">
<p>Obtenez le badge "Vérifié" en uploadant votre CNI ou passeport. Cela rassure les locataires et propriétaires.</p>
<div class="upload-box">
<p>📄 Cliquez pour uploader</p>
</div>
<button class="btn-upload">Envoyer pour vérification</button>
</div>
</div>
</div>
</body>
</html>