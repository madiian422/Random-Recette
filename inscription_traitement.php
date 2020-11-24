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

    // $check = $connection->prepare('SELECT nom, prenom, tel, adresse, email, password FROM user WHERE email = ?');
    // $check->execute(array($email));
    // $data = $check->fetch();
    // $row = $check->rowCount();

    // if ($row == 0) {
    //     if (strlen($nom) <= 100) {
    //         if (strlen($email) <= 100) {
    //             if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //                 if ($password == $password_retype) {

    //                     $password = hash('sha256', $password);
    //$ip = $_SERVER['REMOTE_ADDR'];

    $insert = $connection->prepare('INSERT INTO user(nom, prenom, tel, adresse, email, password) VALUES(:nom, :prenom, :tel, :adresse, :email,:password)');
    $insert->execute(array(

        ':nom' => $nom,
        ':prenom' => $prenom,
        ':tel' => $tel,
        ':adresse' => $adresse,
        ':email' => $email,
        ':password' => $password

    ));

    //                     header('Location:inscription.php?reg_err=success');
    //                 } else header('Location: inscription.php?reg_err=password');
    //             } else header('Location: inscription.php?reg_err=email');
    //         } else header('Location: inscription.php?reg_err=email_length');
    //     } else header('Location: inscription.php?reg_err=nom_length');
    // } else header('Location: inscription.php?reg_err=already');
}

echo $nom . " " . $prenom . " " . $tel . " " . $adresse . " " . $email . " " . $password;
