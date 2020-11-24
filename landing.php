<?php
session_start();
// if(!isset($_SESSION['user']))
//     header('Location:index3.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <?php
            if (isset($_GET['err'])) {
                $err = htmlspecialchars($_GET['err']);
                switch ($err) {
                    case 'current_password':
                        echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                        break;

                    case 'success_password':
                        echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                        break;
                }
            }
            ?>


            <div class="text-center">
                <h1 class="p-5">Bonjour ! <?php echo $_SESSION['user']; ?></h1>
                <hr />
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                    Changer mon mot de passe
                </button>
                <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#avatar">
                    Changer mon avatar
                </button>
            </div>
        </div>
    </div>