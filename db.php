<?php
$dsn = 'mysql:host=localhost;dbname=random_recette';
$username = 'root';
$password = '';
$options = [];
try {
    $connection = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
}
