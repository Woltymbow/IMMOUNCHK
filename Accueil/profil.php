<?php
session_start();

if (!isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['role'] == "admin") {
    header("Location: profil_admin.php");
    exit();
}

if ($_SESSION['role'] == "etudiant") {
    header("Location: profil_etudiant.php");
    exit();
}
?>