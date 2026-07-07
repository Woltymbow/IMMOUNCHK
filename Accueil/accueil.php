<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMMO-UNCHK</title>
    <link rel="stylesheet" href="style.css">

    <!-- Icônes -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

<div class="container">

    <!-- Header -->
    <div class="header">
        <i class="fas fa-bars"></i>
        <h2>IMMO-UNCHK</h2>
        <i class="fas fa-bell"></i>
    </div>

    <!-- Bonjour -->
    <div class="welcome">
        <h1>Bonjour...</h1>
        <p>Trouvez votre logement ideal</p>
    </div>

    <!-- Recherche -->
    <div class="search-box">
        <input type="text" placeholder="Rechercher un logement...">
        <button><i class="fas fa-list"></i></button>
    </div>

    <!-- Categories -->
    <div class="section-title">
        <h2>Categories</h2>
        <a href="#">Voir tout</a>
    </div>

    <div class="categories">

        <div class="cat">
            <i class="fas fa-key"></i>
            <p>Studio</p>
        </div>

        <div class="cat">
            <i class="fas fa-bed"></i>
            <p>Chambre individuelle</p>
        </div>

        <div class="cat">
            <i class="fas fa-users"></i>
            <p>Colocation</p>
        </div>

        <div class="cat">
            <i class="fas fa-desktop"></i>
            <p>Salle de travail</p>
        </div>

    </div>

    <!-- Biens -->
    <div class="section-title">
        <h2>Biens populaires</h2>
        <a href="#">Voir tout</a>
    </div>

    <div class="biens">

        <img src="studio.jpg" width="150">
        <img src="chambre.jpg" width="150">
        <img src="colocation.jpg" width="150">
        <img src="imagg.jpg" width="150">

    </div>

    <p class="description">
        Appartements modernes (studio, chambre individuelle, collective et salle de travail)
    </p>

    <div class="location">
        <i class="fas fa-location-dot"></i>
        <span>Diourbel, Senegal</span>
    </div>

    <!-- Menu bas -->
    <div class="bottom-nav">

    <a href="accueil.php"><i class="fas fa-home"></i><p>Accueil</p></a>

    <a href="../Favoris/favoris.php">
        <i class="far fa-heart"></i>
        <p>Favori</p>
    </a>

    <a href="recherche.php">
        <i class="fas fa-search"></i>
        <p>Recherche</p>
    </a>

    <a href="../Message/messages.php">
        <i class="far fa-comment"></i>
        <p>Message</p>
    </a>

    <a href="profil.php">
        <i class="far fa-user"></i>
        <p>Profil</p>
    </a>

</div>

</div>

</body>
</html>