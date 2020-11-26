<?php


session_start();

if (!$_SESSION['mdp']) {
    header('location:admin.php');
}
echo 'ddddddddddddddddddddddd';
?>
<button><a href="deconnect.php">Déconnexion</a></button>