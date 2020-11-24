<?php
require_once 'db.php';


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['adresse']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])) {


    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $tel = htmlspecialchars($_POST['tel']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);



    $insert = $connection->prepare('INSERT INTO user(nom, prenom, tel, adresse, email, password) VALUES(:nom, :prenom, :tel, :adresse, :email,:password)');
    $insert->execute(array(

        ':nom' => $nom,
        ':prenom' => $prenom,
        ':tel' => $tel,
        ':adresse' => $adresse,
        ':email' => $email,
        ':password' => $password

    ));
}

echo $nom . " " . $prenom . " " . $tel . " " . $adresse . " " . $email . " " . $password;
