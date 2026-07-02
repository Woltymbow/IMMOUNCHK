<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>

<div class="container">

    <!-- Menu gauche -->
   <div class="sidebar">
    <a href="../liste_des_bien/biens.php"><button>🏠</button></a>
    <a href="../liste_des_bien/biens.php"><button>🏢</button></a>
    <a href="utilisateur.php"><button>👥</button></a>
   <a href="../Message/messages.php"><button>✉️</button></a>
      <a href="parametre.php"><button>⚙️</button></a>
</div>

    <!-- Contenu -->
    <div class="main">
        <div class="topbar">
            <h2>Admin</h2>
        </div>

        <div class="welcome">
            Tableau de bord <br>
            Bienvenue administrateur
        </div>

        <div class="cards">
            <div class="card">Biens <br> 50 Total</div>
            <div class="card">Demandes <br> 20 En attente</div>
            <div class="card">Utilisateurs <br> 151 Non lus</div>
        </div>

        <h3>Actions rapides</h3>

        <div class="actions">
            <a href="ajouter_bien.php"><button>Ajouter un bien</button></a>
            <a href="gerer_bien.php"><button>Gérer les biens</button></a>
            <a href="gerer_demandes.php"><button>Gérer les demandes</button></a>
        </div>

    </div>

</div>

</body>
</html>