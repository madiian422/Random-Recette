<?php
require 'db.php';
$sql = 'SELECT * FROM recette';
$statement = $connection->prepare($sql);
$statement->execute();
$recette = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Toutes les recettes</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Intitulé de la recette</th>
          <th>Ingrédients</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
        <?php foreach ($recette as $recettes) : ?>
          <tr>
            <td><?= $recettes->ID; ?></td>
            <td><?= $recettes->nom_recette; ?></td>
            <td><?= $recettes->ingredients; ?></td>
            <td><?= $recettes->description1; ?></td>
            <td>
              <a href="edit.php?ID=<?= $recettes->ID ?>" class="btn btn-info">Modifier</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?ID=<?= $recettes->ID ?>" class='btn btn-danger'>Effacer</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>