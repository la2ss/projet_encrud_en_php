<?php

include 'header.php';
require_once ("../verif/verifafficher.php");

$listeAjouter = listeAjouter_findAll();
 //creation dune nouvelle variable(au mm nom ) pr recuperer les donne ds session



?>

      <div class="container" id="card-body">
          <h5 class="card-title">LISTE DES EMPLOYES</h5>
 
          <p class="card-text">Depuis cette page, vous pouvez revenir sur la page d'accueil en cliquant sur le lien <strong><a href="index.php" Accueil></a></strong>. Vous avez aussi la possibilite d'ajouter un nouvel employes en cliquant sur le lien <strong>Ajouter.</strong></p>
          <a  href="ajouter.php" ><button type="button" class="btn btn-primary float-right">Ajouter</button></a>

          <table class="table table-bordered">
  <thead class="th">

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date De Naissance</th>
      <th scope="col">Fonctions</th>
      <th scope="col">Email</th>
      <th scope="col">Salaire</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($listeAjouter as $ligneAjouter ) {?>
  <tr>
      <td><?php echo $ligneAjouter['id'];?> </td>
      <td><?php echo  $ligneAjouter['prenom'];?>  </td>
      <td><?php echo $ligneAjouter['date_de_naissance'];?> </td>
      <td></td>
      <td><?php echo $ligneAjouter['email'];?> </td>
      <td><?php echo $ligneAjouter['salaire'];?> </td>

        <td><a href="modifier.php?idSalarier=<?php echo $ligneAjouter['id'];?>" <i class="fas fa-user-edit" id="modif"></i></a>
            <a href="../verif/verifsupprimer.php?idSalarier=<?php echo $ligneAjouter['id'];?>" <i class="fas fa-user-times" id="suprim"></i></a>
            <a href="pagesemployes.php" <i class="fas fa-info" id="voir"></i></a></td>
    </tr>


  <?php } ?>

  </tbody>
</table>



          <button type="button" class="btn btn-outline-secondary">Precedent</button>
          <button type="button" class="btn btn-outline-primary">Page 1</button>
          <button type="button" class="btn btn-outline-secondary">Suivant</button>
<br><br><br>


      </div>

      </header>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<?php
include 'footer.php';

?>
