<?php
try {
    $database = new PDO('mysql:host=localhost;dbname=random_recette', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
