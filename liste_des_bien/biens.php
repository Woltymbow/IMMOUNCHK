<?php
include("config.php");
 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Liste des biens</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
background:#f5f5f5;
}

.card{
margin-bottom:20px;
border:none;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

img{
height:200px;
object-fit:cover;
}

h1{
background-color: #31589f;
  color: white;
  padding: 15px;
  font-size: 22px;
  font-weight: bold;
  border-radius: 10px;
  margin-bottom: 20px;
  text-align: center;
}
</style>
</head>

<body>

<div class="titre-barre"><h1> Liste des biens disponibles </h1> </div>

<!-- BARRE DE RECHERCHE -->
<form method="GET" action="biens.php">
<input type="text" name="search" class="form-control" placeholder="Rechercher un bien...">
<br>
<button class="btn btn-primary">Rechercher</button>
</form>

<br>

<div class="row">

<?php include("afficher_biens.php"); ?>

</div>

</div>

</body>
</html>