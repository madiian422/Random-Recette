<?php
try {
    $database = new PDO('mysql:host=localhost;dbname=random_recette', 'root', '');

    echo 'connecté';
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
