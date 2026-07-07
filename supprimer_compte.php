<?php
session_start();
// Ici tu fais DELETE FROM users WHERE id = $_SESSION['user_id']
// + délai 30 jours si tu veux
session_destroy();
header('Location: connexion.php');
exit;
?>