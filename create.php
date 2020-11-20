<?php require_once 'header.php' ?>
<?php require_once 'fichier_style.php' ?>

<?php require_once 'db.php' ?>



<?php

$message = '';

if (isset($_POST['name']) && isset($_POST['ingredient']) && isset($_POST['Description'])) {

    $name = $_POST['name'];
    $ingredient = $_POST['ingredient'];
    $Description = $_POST['Description'];

    $sql = 'INSERT INTO recette (name, ingredient,description) VALUES (:name,:ingredient, :Description)';

    $statement = $database->prepare($sql);
    if (
        $statement->execute([':name' => $name, ':ingredient' => $ingredient, ':Description' => $Description])
    ) {

        $message =  'Bien enregistré';
    }
} ?>

<div class="container pt-5 mt-5">
    <div class="card">
        <div class="card-head">
            <h2>Créer une recette</h2>
        </div>
        <div class="card-body">

            <?php
            if (!empty($message)) : ?>

                <div class="alert alert-success">
                    <?php echo $message; ?>
                </div>

            <?php endif; ?>


            <form method="post">
                <div class="form-group">
                    <label for="name"> Intitulé de la recette</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ingredient"> Ingrédients</label>
                    <input type="text" name="ingredient" id="ingredient" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Description"> Description</label>
                    <textarea name="Description" id="Description" cols="70" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Enregistrer</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php require_once 'footer.php' ?>