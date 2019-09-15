<div class="container mt-5">
<div class="row">

  <?php
foreach ($liste_recette as $recette) {
?>
<div class="col-sm">

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $recette['nom_recette'] ?></h5>
    <p class="card-text"> <?php echo $recette['description_recette']?>.</p>
    <a href="#" class="btn btn-primary">plus d'infos</a>
  </div>
</div>
</div>

<?php
}
 ?>
</div>

</div>
